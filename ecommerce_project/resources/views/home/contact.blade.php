<section class="contact_section ">
    <div class="container px-0">
        <div class="heading_container ">
            <h2 class="">
                Contact Us
            </h2>
            <div>
                @if(session()->has('message'))

                    <div class="alert alert-success">


                        {{session()->get('message')}}
                    </div>



                @endif
            </div>
        </div>
    </div>
    <div class="container container-bg">
        <div class="row">
            <div class="col-lg-7 col-md-6 px-0">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12005.207665337079!2d32.642906570792725!3d41.21519063255077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354ac4492953f%3A0xab3b48ed0392a743!2sKarab%C3%BCk%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1717899949326!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 px-0">
                <form id="request" class="main_form" action="{{url('contact')}}" method="Post">
                    @csrf
                    <div class="col-md-12">
                        <input class="contactus"  placeholder="Name" type="text" name="name" required>
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="email" name="email" required>
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="number" name="phone" required>
                    </div>
                    <div class="col-md-12">
                        <textarea class="textarea"  placeholder="Message" type="type" name="message" required>
                            </textarea>
                    </div>
                    <div class="d-flex ">
                        <button type="submit" class="send_btn">
                            SEND
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<br><br><br>
