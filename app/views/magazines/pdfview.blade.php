<embed src="/{{$seccion->dir_pdf}}" width="600" height="700" type="application/pdf"> <?php

					
					$num=$seccion->click_num;
					$num++;
					$seccion->click_num=$num;
					$seccion->save();
?>