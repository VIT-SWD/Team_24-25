<?php

/**
 * Create a bootstrap success alert
 * @param  String $bold  - First words in the alert. Will be put inside <strong> html tag for emphasis
 * @param  String $message - What will be used for the main description in the alert
 */
function successAlert($activity_name, $final_res)
{
  echo '<div class="row" id="message">
          <div class="col-md-8 mx-auto alert alert-success fade-in" role="alert" >
              <h4 class="alert-heading">Congratulations!</h4>
              <p>You have successfully completed your GP2 activity.</p>
              <hr>
              <strong>
                <p class="mb-0">Activity Name: '. $activity_name .'</p>
                <p class="mb-0">Result Status: '. $final_res .'</p>
              </strong>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
        </div>';
}

/**
 * Create a bootstrap danger alert
 * @param  String $bold  - First words in the alert. Will be put inside <strong> html tag for emphasis
 * @param  String $message - What will be used for the main description in the alert
 */
function dangerAlert($activity_name, $final_res)
{
  echo '<div class="row" id="message">
          <div class="col-md-8 mx-auto alert alert-danger fade-in" role="alert" >
            <h4 class="alert-heading">Sorry To Inform!</h4>
            <p>You failed in your GP2 activity.</p>
            <hr>
            <strong>
              <p class="mb-0">Activity Name: '. $activity_name .'</p>
              <p class="mb-0">Result Status: '. $final_res .'</p>
            </strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          </div>
</div>';
}

function dangerAlertCredentials()
{
  echo '<div class="row" id="message">
          <div class="col-md-8 mx-auto alert alert-danger fade-in" role="alert" >
            <h4 class="alert-heading">Invalid Credentials !</h4>
            <p> Contact Us if you face any issues.</p>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
</div>';
}

/**
 * Create a bootstrap info alert
 * @param  String $bold  - First words in the alert. Will be put inside <strong> html tag for emphasis
 * @param  String $message - What will be used for the main description in the alert
 */
function infoAlert($bold, $message)
{
  echo '<div class="container">
          <div class="alert alert-info fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>' . $bold . '</strong> ' . $message . '
          </div>
        </div>';
}

/**
 * Create a bootstrap warning alert
 * @param  String $bold  - First words in the alert. Will be put inside <strong> html tag for emphasis
 * @param  String $message - What will be used for the main description in the alert
 */
function warningAlert($bold, $message)
{
  echo '<div class="container">
          <div class="alert alert-warning fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>' . $bold . '</strong> ' . $message . '
          </div>
        </div>';
}
