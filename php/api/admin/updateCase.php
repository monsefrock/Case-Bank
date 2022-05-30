<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/Case_.php");
    include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!empty($_POST))
        {
            $cases = new Case_();

            $result = $cases->updateCase($conn,$_POST);

            if ($result){

                if(!empty($_POST["content_case"])){

                    $content = $cases->getContent($conn,$_POST);

                    if(empty($content)){

                        //set
                        $result = $cases->setContent($conn,$_POST);
                        if ($result){

                            echo "1";
                        }
                        else
                        {
                            echo "0";
                        }

                    }

                    else
                    {

                        //update
                        $result = $cases->updateContent($conn,$_POST);

                        if ($result){
                            echo "1";
                        }
                        else
                        {
                            echo "0";
                        }
                    }
                }else{
                    echo '1';
                }


            }
            else
            {

                echo "0";

            }
        }
    }