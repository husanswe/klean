<x-layouts.main>
    <x-slot:title>Create Post</x-slot:title>

    <x-page-hdr>Create New Post</x-page-hdr>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="contact-form">
                    
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">

                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Title" required="required"/>
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <textarea class="form-control p-4" rows="1" id="message" placeholder="Short description" required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" id="message" placeholder="Write a post" required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit">
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-layouts.main>




