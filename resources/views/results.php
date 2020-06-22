
<?php require('partials/nav.php');
use App\Http\Controllers\Controller;?>

    <div class="background">
      <span class="title">This is a list of possible universities you can go to</span>

      <div class="UniList">

      <ul>
        <?php $UnisData = DB::table('information')->get();
        $UserData = DB::table('UInput')->latest('id')->first();?>
            <?php foreach($UnisData as $YourUni):?>
                <?php
                    if($YourUni->TOEFL <= $UserData->Toefl && $YourUni->SAT <= $UserData->Sat
                    && $YourUni->Country == $UserData->Country) :?>
                        <li><?= $YourUni->Name ?></li>
                  <?php endif; ?>
            <?php endforeach; ?>
      </ul>
    </div>

    </div>

  </body>

</html>
