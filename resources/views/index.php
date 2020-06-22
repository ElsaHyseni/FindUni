<?php require('partials/nav.php');
 ?>

    <a href="/contacts"><span class="Contact"> Contact Us</span></a>

    <div class="background">
      <div class="Find">
        <span class="title">Find the best university for you</span>

        <form action="/UnisFound" method="get">
          <input maxlength="3" type="number" name="TOEFLpoints" class="toefl" min="40" max="120" placeholder="TOEFL points"
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          <input maxlength="4" type="number" name="SATpoints" class="sat" min="500" max="1600" placeholder="SAT points"
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

          <select name="Country" class="country">
            <?php $options = array_unique(DB::table('information')->pluck('Country')->toArray(), SORT_REGULAR);?>
            <?php foreach ($options as $countries) :?>
              <option><?= $countries ?></option>
            <?php endforeach; ?>
          </select>

          <button type="submit" class="submit" id="sumbit_btn">SUBMIT</button>
        </form>
      </div>
    </div>

  </body>

</html>
