<?php

  $title = "Settings";
  $theme = "";
  include "header.php";

?>

<h1 class="c-heading c-heading--30 u-spacing"><?php echo $title; ?></h1>

<h2 class="sg-h2" id="colors">Colors</h2>
<h3 class="sg-h3">Primary</h3>
<div class="sg-colors sg-colors--primary">
  <ul class="sg-colors__fill">
    <li>var(--color-primary-30)</li>
    <li class="sg-colors__item--large">var(--color-primary-50)</li>
    <li>var(--color-primary-70)</li>
  </ul>
  <ul class="sg-colors__text">
    <li>var(--color-primary-30)</li>
    <li class="sg-colors__item--large">var(--color-primary-50)</li>
    <li>var(--color-primary-70)</li>
  </ul>
</div>

<h3 class="sg-h3">Secondary</h3>
<div class="sg-colors sg-colors--secondary">
  <ul class="sg-colors__fill">
    <li>var(--color-secondary-50)</li>
  </ul>
  <ul class="sg-colors__text">
    <li>var(--color-secondary-50)</li>
  </ul>
</div>

<h3 class="sg-h3">Neutral</h3>
<div class="sg-colors sg-colors--neutral">
  <ul class="sg-colors__fill">
    <li>var(--color-neutral-10)</li>
    <li>var(--color-neutral-30)</li>
    <li>var(--color-neutral-50)</li>
    <li>var(--color-neutral-70)</li>
    <li>var(--color-neutral-90)</li>
  </ul>
  <ul class="sg-colors__text">
    <li>var(--color-neutral-10)</li>
    <li>var(--color-neutral-30)</li>
    <li>var(--color-neutral-50)</li>
    <li>var(--color-neutral-70)</li>
    <li>var(--color-neutral-90)</li>
  </ul>
</div>

<h3 class="sg-h3">Success</h3>
<div class="sg-colors sg-colors--success">
  <ul class="sg-colors__fill">
    <li>var(--color-success-50)</li>
    <li>var(--color-success-70)</li>
  </ul>
  <ul class="sg-colors__text">
    <li>var(--color-success-50)</li>
    <li>var(--color-success-70)</li>
  </ul>
</div>

<h3 class="sg-h3">Alert</h3>
<div class="sg-colors sg-colors--alert">
  <ul class="sg-colors__fill">
    <li>var(--color-alert-50)</li>
    <li>var(--color-alert-70)</li>
  </ul>
  <ul class="sg-colors__text">
    <li>var(--color-alert-50)</li>
    <li>var(--color-alert-70)</li>
  </ul>
</div>

<?php include "footer.php"; ?>
