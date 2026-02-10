<x-layouts.main>
    <x-slot:title>
        Create Post
    </x-slot:title>

    <x-page-hdr>
        Create New Post
    </x-page-hdr>

    <div class="row">

        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                
                <form name="sentMessage" id="contactForm" novalidate="novalidate">

                    <div class="form-row">
                        <div class="col-sm-6 control-group">
                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-6 control-group">
                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>

                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                    
                </form>

            </div>
        </div>

    </div>

</x-layouts.main>
