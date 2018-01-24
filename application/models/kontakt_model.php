<?php


class kontakt_model extends CI_Model{
    //put your code here
     //anketa
     function __construct() {
      parent::__construct();
      $this->load->database(); //inicijalizuje konekciju sa bazom
    }
     public function get_poll()
	{
		$query = $this->db->select('id, question, answers')
		                      ->where('status', 'active')
					          ->get('polls');
		if($query->num_rows() > 0)
		{
			$row = $query->row();
			$answers = array();
			$answers = unserialize($row->answers);
			$poll_form = form_open('Kontakt/poll_item');

			foreach($answers as $answer)
			{
				$poll_form .= form_radio('answer', $answer);
				$poll_form .= form_label($answer, $answer).'<br/>';
			}
			
			$poll_form .= form_submit('submit', 'Vote');
			$data['poll_form'] = $poll_form;
			$data['question'] = $row->question;
			return $data;
		}	
	}
	
	/**
	 *	Sets the active poll's vote datas
	 *	@param string $vote
	 */
	public function set_poll($vote)
	{
		$query = $this->db->select('answers, votes')
		                      ->where('status', 'active')
							  ->get('polls');
		if($query->num_rows() > 0)
		{
			$row = $query->row();
			
			$answers = unserialize($row->answers);
			$key = array_search($vote, $answers);
			$votes = unserialize($row->votes);
			$actual_vote = $votes[$key];
			$actual_vote = $actual_vote + 1;
			$votes[$key] = $actual_vote;
			$votes = serialize($votes);
			
			$this->db->update('polls', array('votes' => $votes), array('status' => 'active'));
			
			$this->session->set_userdata('voted', 'true');
		}
	}
	
	/**
	 *  Get the active poll and builds the javascript chart
	 *  @return array
	 *
	 */
	public function get_result()
	{
		$query = $this->db->select('question, answers, votes')
		                      ->where('status', 'active')
							  ->get('polls');
		if($query->num_rows() > 0)
		{
			$row = $query->row();
			
			$answers = unserialize($row->answers);
			$votes = unserialize($row->votes);
			(is_array($votes)) ? ksort($votes) : '';
			$question = $row->question;

			$vote_ = '';
			$answer_ = '';
			
			if($votes != FALSE)
			{
				for($i = 1; $i <= count($answers); $i++)
				{	
					if(array_key_exists($i, $votes))
					{
					    $vote_ .= ($i < count($answers)) ? $votes[$i].', ' : $votes[$i];
					    $answer_ .= ($i < count($answers)) ? '"'.$answers[$i].' ('.$votes[$i].')", ' : '"'.$answers[$i].' ('.$votes[$i].')"';	  	
					}
					else
					{
					    $vote_ .= ($i < count($answers)) ? 0 .', ' : 0;	
					    $answer_ .= ($i < count($answers)) ? '"'.$answers[$i].' (0)", ' : '"'.$answers[$i].' (0)"';	  						
					}
				}
			}
			else
			{
				for($k = 1; $k <= count($answers); $k++)
				{
				    $vote_ .= ($k < count($answers)) ? 0 .', ' : 0;
				    $answer_ .= ($k < count($answers)) ? '"'.$answers[$k].' (0)", ' : '"'.$answers[$k].' (0)"';	
				}
			}
						
			$embed = '';
			$embed .= '<link href="http://cdn.kendostatic.com/2011.2.804/styles/examples.min.css" rel="stylesheet"/>'.
					  '<link href="http://cdn.kendostatic.com/2011.2.804/styles/kendo.common.min.css" rel="stylesheet"/>'.
					  '<link href="http://cdn.kendostatic.com/2011.2.804/styles/kendo.kendo.min.css" rel="stylesheet"/>'.
					  '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>'.
					  '<script src="http://cdn.kendostatic.com/2011.2.804/js/kendo.all.min.js"></script>';
			
			$js = "";
			$js = "<script type=\"text/javascript\">
			   function createChart() {
				   $(\"#chart\").kendoChart({
					   theme: \"kendo\",
					   title: {
						   font: \"13px Verdana, sans-serif\",
						   text: \"'".$question."'\"
					   },
					   legend: {
							visible: false
					   },
                       seriesDefaults: {
                            type: \"column\"
                        },
					   series: [
						   {
							   type: \"bar\", 
							   data: [".$vote_."]
						   }
					   ],
					   categoryAxis: {
						   labels: {
							   rotation: 0  
						   },
						   categories: [".$answer_."]									 
					   },
					   valueAxis: {
						   labels: {
								visible: false   
						   },
						   majorGridLines: false,
						   majosUnit: 1,
						   majorTickType: \"none\",
						   minorGridLines: false
					   },
					   tooltip: {
						   visible: true   
					   }
				   });
			   }
				   
			   $(document).ready(function() {
			   createChart();
			   
			   $(document).bind(\"kendo:skinChange\", function(e) {
				   createChart();
			   });

		   });
			</script>";
						
			$data['embed'] = $embed;
			$data['js'] = $js;
		
			return $data;
		}
	}	
	
	/**
	 *  Get all polls (Admin)
	 *  @return string
	 *
	 */
	public function get_all_polls()
	{
		$query = $this->db->select('id, question, status')
						      ->get('polls');
							  
		if($query->num_rows() > 0) 
		{
			$html  = '<table id="polls">';
			$html .= '<thead>';
			$html .= '<th>Id</th>';
			$html .= '<th>Question</th>';
			$html .= '<th>Status</th>';	
			$html .= '<th>Values</th>';		
			$html .= '</thead>';			
			foreach($query->result() as $row)
			{
				$html .= '<tr>';
				$html .= '<td>'.$row->id.'</td><td>'.$row->question.'</td><td>'.anchor('Kontakt/set_poll_status/'.$row->id, $row->status).'</td><td>'.anchor('Kontakt/reset_poll/'.$row->id, 'Reset').'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			
			return $html;			
		}
	}
    
}
