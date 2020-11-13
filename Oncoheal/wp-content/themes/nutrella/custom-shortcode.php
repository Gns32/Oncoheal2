<?php

add_shortcode('all_programs', 'getAllPrograms');

function getAllPrograms() {
	 ?>
	 
	 <div class = "row">
	 <?php
	
	global $wpdb;
	$results = $wpdb->get_results( 'SELECT * FROM wp_custom_programs' );
	
	
	foreach ($results as $result) {
  //print_r( $value->program_name.'<br>' );
  global $wp;
$home_url =  home_url( $wp->request );
?>
	<div class="card col-sm-3">
  <div class = "program-image"><img src="<?php echo get_home_url().$result->image_path; ?>" alt="Denim Jeans" style="width:220px;height:160px"></div>
  <div class = "program-name"><h1><?php echo $result->program_name ?></h1></div>
  
  <div class = "program-desc"><p><?php echo $result->program_description ?></p></div>
  <div class =".appointment-btn"><p><a href = '<?php echo get_home_url(); ?>/book-appointment/?val=<?php echo $result->id; ?>'>Make An Appointment</a></p>
</div>
  </div>
	
	
	<?php 

}


   ?>
   </div>
   <style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  position:relative;
  margin: auto;
  text-align: center;
  font-family: arial;
  float:left;
  width:32%;
  height:500px;
  margin-right:10px;
  margin-bottom:30px;
}

.price {
  color: grey;
  font-size: 22px;
}

.card a{
    font-family: Raleway;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .1em;
    text-indent: .1em;
    text-transform: uppercase;
    padding: 16px 30px 15px;
    margin-bottom: 4px;
    line-height: 1;
    display: inline-block;
    text-align: center;
    color: #fff;
    background-color: #a2cc41;
    border-radius: 40px;
    border: 1px solid #a2cc41;
    position: relative;
    -webkit-transition: all 0.4s linear 0s;
    transition: all 0.4s linear 0s;
}

.card a:hover {
  opacity: 0.7;
}

.program-image{
	height:40%;
	padding:20px;
	
}
.program-name{
	height:10%;
}  
.program-desc{
	height:40%;
}
.appointment-btn{
	height:20%;
	margin:auto; 
 }
    
</style>
   
   <?php  
	
}

add_shortcode('all_programs', 'getAllPrograms');

?>