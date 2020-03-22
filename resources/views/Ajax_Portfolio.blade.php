<?php foreach ($PortfolioImage as $key => $value): ?>
  <a href="{{asset($value->image)}}" title="{{$value->TextTrans('title')}}" class="galleryItem " data-group="{{$key}}">
  <div class="grid-item">
    <img src="{{asset($value->image)}}" />
  </div>
    </a>
<?php endforeach; ?>


<div id="remove-row">
  <button id="btn-more" data-id="{{ $PortfolioInfo->name_en}}" class="nounderline btn-block mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" > Load More Events </button>
</div>
