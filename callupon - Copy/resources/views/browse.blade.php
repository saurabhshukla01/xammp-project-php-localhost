@extends('layout.common')
@section('main')
<section class="text-dark">
         <div class="container pt-4">
            <h5 class="media-heading pt-1 font-weight-bold">Discover petitions</h5>
            <div class="row p-3 mb-3 white text-dark">
               <div class="col-md-12">
                  <ul id="tabs" class="nav nav-tabs" role="tablist">
                     <li class="nav-item" style="margin-bottom: -1px; z-index: 1;">
                        <a id="tab-A" href="#pane-A" class="nav-link text-dark active" data-toggle="tab" role="tab">Featured</a>
                     </li>
                     <li class="nav-item" style="margin-bottom: -1px; z-index: 1;">
                        <a id="tab-B" href="#pane-B" class="nav-link text-dark" data-toggle="tab" role="tab">Popular</a>
                     </li>
                     <li class="nav-item" style="margin-bottom: -1px; z-index: 1;">
                        <a id="tab-C" href="#pane-C" class="nav-link text-dark" data-toggle="tab" role="tab">Recent</a>
                     </li>
                     <li class="nav-item" style="margin-bottom: -1px; z-index: 1;">
                        <a id="tab-C" href="#pane-D" class="nav-link text-dark" data-toggle="tab" role="tab">Victories</a>
                     </li>
                  </ul>
                  <div id="content" class="tab-content" role="tablist" style="margin: -1px 0px 0px 0px;">
                     <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                        <div class="card-header" role="tab" id="heading-A">
                           <h5 class="mb-0">
                              <!-- Note: `data-parent` removed from here -->
                              <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                              Collapsible Group Item A
                              </a>
                           </h5>
                        </div>
                        <div id="collapse-A" class="collapse show border p-3" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="grey-border load-content p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="topics-petition.html">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to Prasoon Joshi, Prakash Javadekar</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">On-Screen Violence Against Women And Girls Need Statutory Warnings Too</h5>
                                          <p> Smoking and drinking are not ok but hitting a woman is absolutely fine. That’s the message you get when you watch a film in India today. <small><a href="petitions-detail.html" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/XiqAiTaPUdvcpnf-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to Prasoon Joshi, Prakash Javadekar</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">On-Screen Violence Against Women And Girls Need Statutory Warnings Too</h5>
                                          <p> Smoking and drinking are not ok but hitting a woman is absolutely fine. That’s the message you get when you watch a film in India today. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/qoPGjzqsmDXDjcx-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="" role="alert">
                                    <span><small><a href="" class="alert alert-secondary text-center media-object loadMore" style="display:block;"><i class="fa fa-suitcase" aria-hidden="true"></i>  Load more</a></small></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                        <div class="card-header" role="tab" id="heading-B">
                           <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                              Collapsible Group Item B
                              </a>
                           </h5>
                        </div>
                        <div id="collapse-B" class="collapse border p-3" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="grey-border load-content1 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="topics-petition.html">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to Prasoon Joshi, Prakash Javadekar</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">On-Screen Violence Against Women And Girls Need Statutory Warnings Too</h5>
                                          <p> Smoking and drinking are not ok but hitting a woman is absolutely fine. That’s the message you get when you watch a film in India today. <small><a href="petitions-detail.html" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/XiqAiTaPUdvcpnf-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content1 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to Prasoon Joshi, Prakash Javadekar</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">On-Screen Violence Against Women And Girls Need Statutory Warnings Too</h5>
                                          <p> Smoking and drinking are not ok but hitting a woman is absolutely fine. That’s the message you get when you watch a film in India today. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/qoPGjzqsmDXDjcx-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content1 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content1 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content1 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content1 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content1 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content1 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="" role="alert">
                                    <span><small><a href="" class="alert alert-secondary text-center media-object loadMore1" style="display:block;"><i class="fa fa-suitcase" aria-hidden="true"></i>  Load more</a></small></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                        <div class="card-header" role="tab" id="heading-C">
                           <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                              Collapsible Group Item C
                              </a>
                           </h5>
                        </div>
                        <div id="collapse-C" class="collapse border p-3" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="grey-border load-content2 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="topics-petition.html">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to Prasoon Joshi, Prakash Javadekar</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">On-Screen Violence Against Women And Girls Need Statutory Warnings Too</h5>
                                          <p> Smoking and drinking are not ok but hitting a woman is absolutely fine. That’s the message you get when you watch a film in India today. <small><a href="petitions-detail.html" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/XiqAiTaPUdvcpnf-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content2 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to Prasoon Joshi, Prakash Javadekar</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">On-Screen Violence Against Women And Girls Need Statutory Warnings Too</h5>
                                          <p> Smoking and drinking are not ok but hitting a woman is absolutely fine. That’s the message you get when you watch a film in India today. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/qoPGjzqsmDXDjcx-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content2 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content2 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content2 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content2 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content2 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content2 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="" role="alert">
                                    <span><small><a href="" class="alert alert-secondary text-center media-object loadMore2" style="display:block;"><i class="fa fa-suitcase" aria-hidden="true"></i>  Load more</a></small></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-D">
                        <div class="card-header" role="tab" id="heading-D">
                           <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapse-D" aria-expanded="false" aria-controls="collapse-D">
                              Collapsible Group Item D
                              </a>
                           </h5>
                        </div>
                        <div id="collapse-D" class="collapse border p-3" role="tabpanel" data-parent="#content" aria-labelledby="heading-D">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="grey-border load-content3 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="topics-petition.html">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to Prasoon Joshi, Prakash Javadekar</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">On-Screen Violence Against Women And Girls Need Statutory Warnings Too</h5>
                                          <p> Smoking and drinking are not ok but hitting a woman is absolutely fine. That’s the message you get when you watch a film in India today. <small><a href="petitions-detail.html" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/XiqAiTaPUdvcpnf-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content3 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to Prasoon Joshi, Prakash Javadekar</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">On-Screen Violence Against Women And Girls Need Statutory Warnings Too</h5>
                                          <p> Smoking and drinking are not ok but hitting a woman is absolutely fine. That’s the message you get when you watch a film in India today. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/qoPGjzqsmDXDjcx-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content3 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content3 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content3 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content3 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content3 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="grey-border load-content3 p-3 mb-3 white">
                                    <div class="alert alert-grey" role="alert">
                                       <small>
                                       <i class="fa fa-tags" aria-hidden="true"></i> Trending in <a href="">Womens rights</a>
                                       <span class="float-right"><a href="">View all</a></span>
                                       </small>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <small>Petition to President of India, Narendra Modi</small>
                                          <h5 class="media-heading pt-1 font-weight-bold">#SaveRTI</h5>
                                          <p>There is a move to weaken OUR fundamental Right to Information. This will stop us from exposing corruption and getting accountability. <small><a href="" class="text-danger font-italic">Read More...</a></small></p>
                                          <span class="mr-5 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">Mahika Banerji</small></span>
                                          <span class="mr-5 pt-3 text-danger"><i class="fa fa-users" aria-hidden="true"></i> <small class="text-dark">29,047 supporters</small></span>
                                       </div>
                                       <div class="col-md-4">
                                          <img src="http://localhost/callupon/assets/images/kEIjCKpChRjWDWh-400x400-noPad.jpg" class="media-object-img">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="" role="alert">
                                    <span><small><a href="" class="alert alert-secondary text-center media-object loadMore3" style="display:block;"><i class="fa fa-suitcase" aria-hidden="true"></i>  Load more</a></small></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="trending-petitions p-5">
         <div class="container">
            <div class="row">
               <h4 class="col-md-12 text-left mb-4">Trending petitions</h4>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/TDRYYLbcAjrTDnv-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/lJxCVcxjZKgqIeA-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/qMhmdGnRIAVpaQc-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/yPUYZSuxDNwhqOv-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/IjbXeOQjmWhIoAT-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/fkpIRZVMpfkZtvg-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/GGoDRzPojcVYiYz-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/lJxCVcxjZKgqIeA-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-2">
                  <div class="card p-2">
                     <small class="mb-2"><b>Trending on Callupon.org</b></small>
                     <img class="card-img-top" src="http://localhost/callupon/assets/images/lJxCVcxjZKgqIeA-800x450-noPad.jpg" alt="Card image" style="width:100%">
                     <div class="card-body">
                        <h4 class="card-title">Pass Guidelines for #SwachhWorship At All Religious Places</h4>
                        <p class="card-text"><a href="" class="font-weight-normal text-secondary">Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <small class="text-danger font-italic font-weight-bold">Read More...</small></a></p>
                        <a href="#" class="btn btn-primary">Sign the petition</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection
