<embed src="http://repertorioamericano.lc/{{$seccion->dir_pdf}}" width="700" height="600" type="application/pdf"> <?php

					
					$num=$seccion->click_num;
					$num++;
					$seccion->click_num=$num;
					$seccion->save();
?>