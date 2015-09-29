<?php snippet('header') ?>

    <main class="main" role="main">

        <form>
            <input type="search" name="q" value="<?php echo esc($query) ?>">
            <input type="submit" value="Search">
        </form>

        <?php foreach($results as $result): ?>
            <div class="project__thumb">
                <a href="<?php echo $result->url() ?>">
                    <?php 

                        if ($result->image( $result->featured() )) {
                            $image = $result->image( $result->featured() );
                        } else {
                            $image = $result->image();
                        }

                    ?>
                    <img src="<?php echo thumb($image, $thumbSettings)->url() ?>" alt="<?php echo $result->title()->html() ?>" >
                    <button class="btn btn-line aligncenter"><?php echo l::get('view_project_btn') ?></button>
                </a>
            </div>
        <?php endforeach ?>
        
    </main>

<?php snippet('footer') ?>