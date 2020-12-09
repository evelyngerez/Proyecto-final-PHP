@extends('layouts.principal')

    <section id="contact " class="contact-area pt-115 ">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-lg-6 ">
                    <div class="contact-title text-center ">
                        <h2 class="title ">Tu opinión nos parece muy importante</h2>
                    </div>
                    <!-- contact title -->
                </div>
            </div>
            <!-- row -->
            <div class="contact-box mt-70 ">
                <div class="row ">
                    <div class="col-lg-4 ">
                        <div class="contact-info pt-25 ">
                            <ul>
                                <li>
                                    <div class="single-info mt-30 ">
                                        <div class="info-icon ">
                                            <i class="lni-phone-handset "></i>
                                        </div>
                                        <div class="info-content ">
                                            <p>(011) 25363802</p>
                                        </div>
                                    </div>
                                    <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30 ">
                                        <div class="info-icon ">
                                            <i class="lni-envelope "></i>
                                        </div>
                                        <div class="info-content ">
                                            <p>dulcevioleta@gmail.com</p>
                                        </div>
                                    </div>
                                    <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30 ">
                                        <div class="info-icon ">
                                            <i class="lni-home "></i>
                                        </div>
                                        <div class="info-content ">
                                            <p>San Justo,Buenos Aires</p>
                                        </div>
                                    </div>
                                    <!-- single info -->
                                </li>
                            </ul>
                        </div>
                        <!-- contact info -->
                    </div>
                    <div class="col-lg-8 ">
                        <div class="contact-form ">
                            <form id="contact-form " action="/contact.php " method="post " data-toggle="validator ">
                                <div class="row ">
                                    <div class="col-lg-6 ">
                                        <div class="single-form form-group ">
                                            <input type="text " name="name " placeholder="Nombre " data-error="Por favor,complete su nombre. " required="required ">
                                            <div class="help-block with-errors "></div>
                                        </div>
                                        <!-- single form -->
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="single-form form-group ">
                                            <input type="email " name="email " placeholder="Correo Electronico " data-error="Correo Electronico no valido. " required="required ">
                                            <div class="help-block with-errors "></div>
                                        </div>
                                        <!-- single form -->
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="single-form form-group ">
                                            <textarea name="message " placeholder="Escriba aquí su opinión " data-error="Por favor,dejanos tu consulta escrita. " required="required "></textarea>
                                            <div class="help-block with-errors "></div>
                                        </div>
                                        <!-- single form -->
                                    </div>
                                    <p class="form-message "></p>
                                    <div class="col-lg-12 ">
                                        <div class="single-form form-group ">
                                            <button class="main-btn " type="submit ">Enviar</button>
                                        </div>
                                        <!-- single form -->
                                    </div>
                                </div>
                                <!-- row -->
                            </form>
                        </div>
                        <!-- row -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- contact box -->
        </div>
        <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container ">
        <div class="row justify-content-center ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.1375495044176!2d-58.56182773446422!3d-34.70171045412123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc6045e41339d%3A0x15d6e34d6d6f96c3!2sAnatole%20France%204388%2C%20B1754HJH%20San%20Justo%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1606679937912!5m2!1ses!2sar
                            " width="1000 " height="457 " frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>
        </div>
    </div>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="# " class="back-to-top "><i class="lni-chevron-up "></i></a>
</body>
    </html>