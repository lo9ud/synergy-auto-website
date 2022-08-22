<?php 
    function enumerate($lst){
        foreach (array_values($lst) as $i => $val) {
            yield [$i, $val];
        }
    }

    function createSlideshow($id, $files, $rootfolder){
        $maxheight = 0;
        foreach($files as $file){
            $newheight = getimagesize($rootfolder . $file)[1];
            if($maxheight < $newheight){
                $maxheight = $newheight;
            }
        }

        $maxwidth = 0;
        foreach($files as $file){
            $newwidth = getimagesize($rootfolder . $file)[0];
            if($maxwidth < $newwidth){
                $maxwidth = $newwidth;
            }
        }
        

        echo "<div id=\"" . $id . "\" class=\"slideshow-container\">";
            echo "<script>";
            echo $id . " = new Slideshow(\"" . $id . "\", [\"" . join("\", \"", $files) . "\"], \"" . $rootfolder . "\", [" . $maxwidth . ", " . $maxheight . "]);";
            echo "</script>";

            echo "<div  class=\"btn-box\">";
                echo "<span class=\"btn\" onclick=\"" . $id . ".prevSlide()\">&#xab;</span>";
                echo "<span class=\"btn\" onclick=\"" . $id . ".nextSlide()\">&#xbb;</span>";
            echo "</div>";
            echo "<div class=\"dot-box\">";
                echo "<div class=\"dot-spacer\"></div>";
                foreach(enumerate($files) as list($i, $file)){
                    echo "<div class=\"dot\" onclick=\"" . $id . ".setSlide(" . $i + 1 . ")\" data-index=\"" . $i . "\" data-id=\"" . $id . "\">&#xb7;</div>";
                    echo "<div class=\"dot-spacer\"></div>";
                }
            echo "</div>";

            echo "<script>";
            echo $id . ".init();";
            echo "window.onresize = function resize(){setTimeout(" . $id . ".init, 1000)};";
            echo "</script>";
        echo "</div>";

        
    }
?>