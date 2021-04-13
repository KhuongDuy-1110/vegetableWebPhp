<?php
    $this->fileLayout = "LayoutTrangTrong.php";
?>
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <?php foreach ($data as $rows): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>">
                                        <?php
                                            if(strlen($rows->name)>60){
                                                $str1 = substr($rows->name, 0, 60);
                                                $str1 = explode(' ', $str1);
                                                array_pop($str1); // remove last word from array
                                                $str1 = implode(' ', $str1);
                                                $str1 = $str1 . ' ...';
                                                echo $str1;
                                            }
                                            else
                                                echo $rows->name;
                                        ?>
                                    </a>
                                </h5>
                                <p>
                                    <?php
                                        if(strlen($rows->description)>100){
                                            $str = substr($rows->description, 0, 100);
                                            $str = explode(' ', $str);
                                            array_pop($str); // remove last word from array
                                            $str = implode(' ', $str);
                                            $str = $str . ' ...';
                                            echo $str;
                                        }
                                        else
                                            echo $rows->description;
                                    ?>
                                </p>
                                <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                    <div class="col-lg-12">
                        <div class="product__pagination blog__pagination">
                            <?php for ($i = 1; $i<=$numPage; $i++): ?>
                            <a href="index.php?controller=news&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            <?php endfor;?>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
