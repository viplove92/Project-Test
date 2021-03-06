<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
<div class="modal-dialog ">
<div class="modal-content">

        <!-- START DIALOG -->
        <div id="itemDetails" class="dialog item-details">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
        <div class="container-fluid">
        <div class="row overview">
        <div class="col-sm-7 no-padding item-slideshow-wrapper full-height">
        <div class="item-slideshow full-height">
        {{--<div class="slide" data-image="assets/img/gallery/item-square.jpg">--}}
        <div class="slide" data-image="../images/complaints/{{ $complaint->photo_url }}">

        </div>
        {{--<div class="slide" data-image="assets/img/gallery/item-square.jpg">--}}
        <div class="slide" data-image="../images/complaints/{{ $complaint->photo_url }}">

        </div>
        </div>
        </div>
        <div class="col-sm-12 visible-xs bg-info-dark">
        <div class="container-xs-height">
        <div class="row row-xs-height">
        <div class="col-xs-8 col-xs-height col-middle no-padding">
        <div class="thumbnail-wrapper d32 circular inline">
        <img width="32" height="32" src="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg" alt="">
        </div>
        <div class="inline m-l-15">
        <p class="text-white no-margin">Alex Nester</p>
        <p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
        </div>
        </div>
        <div class="col-xs-4 col-xs-height col-middle text-right  no-padding">
        <h2 class="bold text-white price font-montserrat">$20.00</h2>
        </div>
        </div>
        </div>
        </div>
        <div class="col-sm-5 p-r-35 p-t-35 p-l-35 full-height item-description">
        <h2 class="semi-bold no-margin font-montserrat">Happy Ninja</h2>
        <p class="rating fs-12 m-t-5">
        <i class="fa fa-star "></i>
        <i class="fa fa-star "></i>
        <i class="fa fa-star "></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
        </p>
        <p class="fs-13">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful.
        </p>
        <div class="row m-b-20 m-t-20">
        <div class="col-xs-6"><span class="font-montserrat all-caps fs-11">Price ranges</span>
        </div>
        <div class="col-xs-6 text-right">$20.00 - $40.00</div>
        </div>
        <div class="row m-t-20 m-b-10">
        <div class="col-xs-6"><span class="font-montserrat all-caps fs-11">Paint sizes</span>
        </div>
        </div>
        <button class="btn btn-white">S</button>
        <button class="btn btn-white">M</button>
        <button class="btn btn-white">L</button>
        <button class="btn btn-white">XL</button>
        <br>
        <button class="btn btn-primary buy-now">Buy Now</button>
        </div>
        </div>
        <div class="row footer bg-info-dark hidden-xs">
        <div class="col-sm-7 full-height separator">
        <div class="container-xs-height">
        <div class="row row-xs-height">
        <div class="col-xs-7 col-xs-height col-middle no-padding">
        <div class="thumbnail-wrapper d48 circular inline">
        <img width="48" height="48" src="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg" alt="">
        </div>
        <div class="inline m-l-15">
        <p class="text-white no-margin">Alex Nester</p>
        <p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
        </div>
        </div>
        <div class="col-xs-5 col-xs-height col-middle text-right  no-padding">
        <h2 class="bold text-white price font-montserrat">$20.00</h2>
        </div>
        </div>
        </div>
        </div>
        <div class="col-sm-5 full-height">
        <ul class="recommended list-inline pull-right m-t-10 m-b-0">
        <li>
        <a href="#"><img src="assets/img/gallery/thumb-1.jpg">
        </a>
        </li>
        <li>
        <a href="#"><img src="assets/img/gallery/thumb-2.jpg">
        </a>
        </li>
        <li>
        <a href="#"><img src="assets/img/gallery/thumb-3.jpg">
        </a>
        </li>
        </ul>
        </div>
        </div>
        </div>
        <button class="close action top-right" data-dialog-close><i class="fa fa-close fs-14"></i>
        </button>
        </div>
        </div>
        <!-- END DIALOG -->

</div>
</div>
</div>


@section('gallery')
<!-- START CATEGORY -->
<div class="gallery">
              <div class="gallery-filters p-t-20 p-b-10">
                <ul class="list-inline text-right">
                  <li class="hint-text">Sort by: </li>
                  <li><a href="#" class="active text-master p-r-5 p-l-5">Name</a>
                  </li>
                  <li><a href="#" class="text-master hint-text p-r-5 p-l-5">Views</a>
                  </li>
                  <li><a href="#" class="text-master hint-text p-r-5 p-l-5">Cost</a>
                  </li>
                  <li>
                    <button class="btn btn-primary m-l-10" data-toggle="filters">More filters</button>
                  </li>
                </ul>
              </div>
              <!-- START GALLERY ITEM -->
              <div class="gallery-item first" data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/1.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="2" data-height="2">
                <!-- START PREVIEW -->
                <div class="live-tile slide" data-speed="750" data-delay="4000" data-mode="carousel">
                  <div class="slide-front">
                    <img src="assets/img/gallery/2_1.jpg" alt="" class="image-responsive-height">
                  </div>
                  <div class="slide-back">
                    <img src="assets/img/gallery/2_2.jpg" alt="" class="image-responsive-height">
                  </div>
                </div>
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info more-content">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <h3 class="pull-left bold text-white no-margin">Happy Ninja</h3>
                        <h3 class="pull-right semi-bold text-white font-montserrat bold no-margin">$25.00</h3>
                        <div class="clearfix"></div>
                        <span class="hint-text pull-left text-white">Hand and mind crafted</span>
                        <div class="clearfix"></div>
                      </div>
                      <div class="">
                        <h5 class="text-white light">Most Sold Item in the marketplace</h5>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/3.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/4.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/5.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/6.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/7.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/8.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/9.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/10.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/11.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/12.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/13.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="assets/img/gallery/14.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Happy Ninja</p>
                        <h5 class="pull-right semi-bold text-white font-montserrat bold">$25.00</h5>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
            </div>
<!-- END CATEGORY -->
@endsection


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
<div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="text-left p-b-5"><span class="semi-bold">News letter</span> signup</h5>
        </div>
        <div class="modal-body">
        <div class="row">
        <div class="col-md-9">
        <input type="text" placeholder="Your email address here" class="form-control input-lg" id="icon-filter" name="icon-filter">
        </div>
        <div class="col-md-3 text-center">
        <button type="button" class="btn btn-primary btn-lg btn-large fs-15">Sign up</button>
        </div>
        </div>
        <p class="text-right hinted-text p-t-10 p-r-10">What is it ? Terms and conditions</p>
        </div>
        <div class="modal-footer">
        </div>
        </div>
<!-- /.modal-content -->
</div>
</div>


<div id="itemDetails" class="dialog item-details">
<div class="dialog__overlay"></div>
<div class="dialog__content">
<div class="container-fluid">
<div class="row overview">
<div class="col-sm-7 no-padding item-slideshow-wrapper full-height">
<div class="item-slideshow full-height">
<div class="slide" data-image="assets/img/gallery/item-square.jpg">
</div>
<div class="slide" data-image="assets/img/gallery/item-square.jpg">
</div>
</div>
</div>
<div class="col-sm-12 visible-xs bg-info-dark">
<div class="container-xs-height">
<div class="row row-xs-height">
<div class="col-xs-8 col-xs-height col-middle no-padding">
<div class="thumbnail-wrapper d32 circular inline">
<img width="32" height="32" src="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg" alt="">
</div>
<div class="inline m-l-15">
<p class="text-white no-margin">Alex Nester</p>
<p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
</div>
</div>
<div class="col-xs-4 col-xs-height col-middle text-right  no-padding">
<h2 class="bold text-white price font-montserrat">$20.00</h2>
</div>
</div>
</div>
</div>
<div class="col-sm-5 p-r-35 p-t-35 p-l-35 full-height item-description">
<h2 class="semi-bold no-margin font-montserrat">Happy Ninja</h2>
<p class="rating fs-12 m-t-5">
<i class="fa fa-star "></i>
<i class="fa fa-star "></i>
<i class="fa fa-star "></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
</p>
<p class="fs-13">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful.
</p>
<div class="row m-b-20 m-t-20">
<div class="col-xs-6"><span class="font-montserrat all-caps fs-11">Price ranges</span>
</div>
<div class="col-xs-6 text-right">$20.00 - $40.00</div>
</div>
<div class="row m-t-20 m-b-10">
<div class="col-xs-6"><span class="font-montserrat all-caps fs-11">Paint sizes</span>
</div>
</div>
<button class="btn btn-white">S</button>
<button class="btn btn-white">M</button>
<button class="btn btn-white">L</button>
<button class="btn btn-white">XL</button>
<br>
<button class="btn btn-primary buy-now">Buy Now</button>
</div>
</div>
<div class="row footer bg-info-dark hidden-xs">
<div class="col-sm-7 full-height separator">
<div class="container-xs-height">
<div class="row row-xs-height">
<div class="col-xs-7 col-xs-height col-middle no-padding">
<div class="thumbnail-wrapper d48 circular inline">
<img width="48" height="48" src="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg" alt="">
</div>
<div class="inline m-l-15">
<p class="text-white no-margin">Alex Nester</p>
<p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
</div>
</div>
<div class="col-xs-5 col-xs-height col-middle text-right  no-padding">
<h2 class="bold text-white price font-montserrat">$20.00</h2>
</div>
</div>
</div>
</div>
<div class="col-sm-5 full-height">
<ul class="recommended list-inline pull-right m-t-10 m-b-0">
<li>
<a href="#"><img src="assets/img/gallery/thumb-1.jpg">
</a>
</li>
<li>
<a href="#"><img src="assets/img/gallery/thumb-2.jpg">
</a>
</li>
<li>
<a href="#"><img src="assets/img/gallery/thumb-3.jpg">
</a>
</li>
</ul>
</div>
</div>
</div>
<button class="close action top-right" data-dialog-close><i class="pg-close fs-14"></i>
</button>
</div>
</div>

