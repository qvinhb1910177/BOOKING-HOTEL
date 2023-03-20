<div class="wrapSlideMain">
            <div class="contentSlideMain">
                <div class="showSlideMain">
                <?php 
                    $banner_image = json_decode($data["banner_image"],true);
                    foreach($banner_image as $row_ba){ ?>
            
                    <div class="elementSlideMain">
                        <div class="wrapImgResize wrapImgSlideMain">
                            <img src="public/assets/images/<?php echo $row_ba["image_anh"]?>" alt="HomeStayTQV" />
                        </div>

                                        </div>
                    
                   <?php } ?>
                </div>
            </div>
        </div>
        <!-- end Slide main -->

        <!-- form book room -->
        <div class="wrapFormBookRoom">
            <div class="container-xl containerFormBookRoom">    
                <div class="contentFormBookRoom">
                    <h3 class="wrapTitleType1 titleMainFormBookRoom">Book a room</h3>

                    <div class="listInputBookRoom">
                        <div class="row rowInputBookRoom">
                            <div class="col colInputBookRoom">
                                <div class="contentInputBookRoom">
                                    <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>

                                    <input type="text" readonly="true" class="form-control inputFrmChooseDateCheckIn" placeholder="Check-in" />
                                </div>
                            </div>

                            <div class="col colInputBookRoom">
                                <div class="contentInputBookRoom">
                                    <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>

                                    <input type="text" readonly="true" class="form-control inputFrmChooseDateCheckOut" placeholder="Check-out" />
                                </div>
                            </div>

                            <div class="col colInputBookRoom">
                                <div class="contentInputBookRoom">
                                    <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>

                                    <select class="form-control selectPciker inputFrmNumberAdult">
                                        <option>Người lớn</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col colInputBookRoom">
                                <div class="contentInputBookRoom">
                                    <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>

                                    <select class="form-control selectPciker inputFrmNumberChildren">
                                        <option>Trẻ em</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col colInputBookRoom colBtnBookRoom">
                                <div class="contentInputBookRoom">
                                    <button type="button" name="book-now" 
                                    class="btnType1 btnBookNowRoomForm" 
                                    data-toggle="modal" data-target="#modalFormBookRoom">Book now</button>
                                    <button type="button" name="cancel-book" class="btnType2 btnCancelBookRoom">Hủy</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapTextBookRoom">* Đảm bảo giá tốt nhất</div>
                </div>
            </div>
        </div>
        <!-- end form book room -->

        <!-- about -->
        <div class="wrapAboutHome">
            <div class="container-xl containerAboutHome">
                <div class="contentAboutHome">                    
                    <div class="row rowAboutHome">
                        <div class="col-lg-6 colImgAbouthome">
                            <div class="wrapImgAboutHome"><img src="public/assets/images/banner_about.png" 
                            class="imgAbouthome"  /></div>
                        </div>

                        <div class="col-lg-6 colTextAboutHome"> 
                            <h3 class="wrapTitleType1Mini">Chào mừng đến với HomeStay TQV</h3>

                            <h3 class="wrapTitleType1 titleMainAboutHome">Tận hưởng trọn vẹn  kì nghỉ của bạn</h3>

                            <div class="wrapTextAboutHome">
                                <p style="font-family: 'IBMPlexSerif'; font-weight: 500; font-size: 18px; line-height: 32px;">Chỉ cách thành phố 5 phút đi xe và nằm trên trung tâm đường 30/4, homestay TQV tự tin đem đến cho bạn những trải nhiệm tuyệt vời nhất trong kì nghỉ dưỡng. Chúng tôi luôn sẵn sàng tiếp đón và phục vụ hết mình vì quý khách.</p>
                                <p style="font-size: 16px; line-height: 30px;">Phòng ốc được bố trí hài hòa hợp lý sang trọng và đầy đủ tiện nghi. Các phòng được thiết kế với sự kế theo phong cách phương tây chắc chắn sẽ làm bạn hài lòng. </p>
                            </div>

                           <!--  <a href="#" title="Xem thêm" class="btnType1 btnWatchMoreAbout">Xem thêm</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->

        <!-- wrap list room -->
        <div class="wrapListProject">
            <div class="container-xl containerListProject">
                <div class="contentListProject">                    
                    <h3 class="wrapTitleType2">Phòng</h3>

                    <div class="listProject">
                        <div class="row rowListProject">
                            <?php
                                if(isset($data["phong"])){
                                    $danhsach  = json_decode($data["phong"],true);
                                    foreach($danhsach as $row12){
                                        echo'<div class="col-sm-6 col-lg-3 colItemProject">
                                        <div class="contentItemProject">
                                            <a href="phong.htm"  class="wrapImgResize imgSquare wrapImgResizeItemProject">
                                                <img src="public/assets/images/'.$row12["image_anh"].'" class="imgItemProject"  />
                                            </a>
        
                                            <div class="wrapTextItemProject">
                                                <a href="phong.htm" class="linkTitleItemProject">
                                                <h4 class="titleHeaddingItemProject">'.$row12["ten_phong"].'</h4></a>
        
                                                <div class="priceRoomItem">Giá <div class="textPriceRoomItem">'.$row12["gia_phong"].' VNĐ</div></div>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                }

                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrap list room -->

        

        <!-- banner contact -->
        <div class="wrapBannerContact" style="background-image: url(public/assets/images/nen3.jpg);">
            <div class="wrapBgBannerContact">
                <div class="container-xl containerBannerContact">
                    <div class="contentBannerContact">
                        <h3 class="textDescriptionBannerContact">HomeStay được thiết kế theo phong cách hiện đại và trẻ trung.</h3>

                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- end banner contact -->


        
        <!-- comment -->
        <!-- <div class="wrapListComment">
            <div class="container-xl containerListComment">
                <div class="clearfix wrapBannerAndCmmt">
                    <div class="contentListComment">
                        <h3 class="wrapTitleType1Mini">Khách của chúng tôi</h3>

                        <h3 class="wrapTitleType1">Đánh giá</h3>
                        
                        <div class="wrapSlideTestiomonials">
                            <div class="showSlideTestimonials">
                                <div class="elementlideTestimonials">
                                    <div class="textTestimonial">Một nơi tuyệt vời cho các kì nghỉ dưỡng sau những ngày mệt nhọc.</div>

                                    <div class="media">
                                        <div class="mediaLeft">
                                            <div class="wrapImgResize imgSquare wrapImgItemTestimonial">
                                                <img src="public/assets/images/guest.jpg" class="imgItemTestimonial" />
                                            </div>
                                        </div>

                                        <div class="media-body mediaBodyItemTestimonial">
                                            <div class="titleNameTestimonial">Trần Quang Minh</div>

                                            <div class="descriptionTestimonial">Trà Cú, Trà Vinh</div>

                                            <div class="wrapIconTestimonial">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementlideTestimonials">
                                    <div class="textTestimonial">Tôi và gia đình đã đến đây 3 lần và cảm thấy rất hài lòng. Chúng tôi sẽ tiếp tục ở đây nếu như có đi du lịch nha trang</div>

                                    <div class="media">
                                        <div class="mediaLeft">
                                            <div class="wrapImgResize imgSquare wrapImgItemTestimonial">
                                                <img src="public/assets/images/rice.jpg" alt="Mrs Warton" class="imgItemTestimonial" />
                                            </div>
                                        </div>

                                        <div class="media-body mediaBodyItemTestimonial">
                                            <div class="titleNameTestimonial">Declan Rice</div>

                                            <div class="descriptionTestimonial">United Kingdom</div>

                                            <div class="wrapIconTestimonial">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapBannerCmt">
                        <div class="wrapImgResize imgSquare">
                            <img src="public/assets/images/nen_danh_gia.jpg" alt="Đánh giá" />
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <script src="public/assets/js/home.js"></script> 
       