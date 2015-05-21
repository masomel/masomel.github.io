<?php

//represents the basis for any page on my personal website
class Page{

  //class attributes
  public $content;
  public $title;
  
  public function __set($name, $value){
    $this->$name = $value;
  }

  public function Display(){    

    $this->DisplayHeader();

    echo $this->content;

    $this->DisplayFooter();
  }
  
  public function DisplayHeader(){
    
    echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
 	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php echo $this->title; ?>

<meta name="Author" content="Marcela M." />
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div class="left">
<br/><br/><br/>

<table width="100%"><tr>
<td align="left">

<img width="50%" height="50%" src="marci.jpg" alt=""/>
</td>
<td>
<span class="title">Marcela Melara</span><br/>

<span>melara at cs dot princeton dot edu</span><br/><br/>
<a href="http://www.cs.princeton.edu">Department of Computer Science</a><br/>
35 Olden St, Princeton, NJ 08540<br/><br/></br><br/>

<span><a href="index.php">Home</a></span><br/>
<span><a href="projects.php">Research & Projects</a></span><br/>
<span><a href="publications.php">Publications</a></span><br/>
<span><a href="teaching.php">Teaching</a></span><br/>
<span><a href="cv.pdf">Curriculum Vitae</a></span>
<br/><br/><br/>
</td>
</tr>
</table>
<br/>
    <?php
  }


 

  public function DisplayFooter(){
	?>
   <br/>
   <div class="copyright">Copyright &copy; 2012-2015 Marcela S. Melara. All rights reserved.</div>
   </body>
   </html>

	<?php

  }

}

?>
