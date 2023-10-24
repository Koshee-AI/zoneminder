<?php
// This is the HTML representing the Object Detection modal on the Events page

$eid = isset($_REQUEST['eid']) ? $_REQUEST['eid'] : '';

if ( !validInt($eid) ) {
  ZM\Error("Invalid event id: $eid");
  return;
}

$event = new ZM\Event($eid);
$event_path = $event->Path();
$video_path = $event_path . "/objectdetect.mp4";

?>
<div id="objdetectModal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Object Detection</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <video src=<?php urldecode($video_path) ?> type="video/mp4"></video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
