<div class="w3-container w3-center">


	<span class="w3-xxlarge  w3-serif w3-text-theme">Manage News</span>

	<div class="w3-container">
		
<?php
if (!empty($items))
{
foreach ($items as $item) {
	//design this later
echo "<div class='w3-container w3-margin w3-padding'>";
echo "<span class='fa fa-circle w3-text-black w3-tiny'> </span> <span class='w3-small'>";
echo $item['title'];
echo "</span><br>";
echo  "<a href='".site_url('webfunction/news_preview/'.$this->uri->segment(3).'/'.$item['slug'])."' ><span class='fa fa-eye w3-text-theme w3-margin-right'></span></a> <a href='".site_url('webfunction/confirm_delete/'.$this->uri->segment(3).'/news/'.$item['slug'])."' ><span class='fa fa-trash w3-text-theme w3-margin-right'></span></a>  <a href='".site_url('webfunction/edit_news/'.$this->uri->segment(3).'/'.$item['slug'])."' ><span class='fa fa-pencil w3-text-theme'></span></a> ";

echo "</div>";

}
echo "<br>";
echo $pagination;
echo "<br>";

}else{

	echo "No News Item Available";
}



?>
	</div>







</div>