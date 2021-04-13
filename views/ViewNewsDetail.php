<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__details__hero__text">
                    <img src="assets/upload/news/<?php echo $record->photo ?>">
                    <h2><?php echo $record->description; ?></h2>
                    <ul>
                        <li><?php echo $record->content; ?></li>
                        <li>January 14, 2019</li>
                        <li>8 Comments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
