<?php
require("include/head.php");
require("include/header.php");
?>
<!-- process-section start -->
<section class="process-section bg-white-smoke ptb-120">
    <div class="container">
        <div class="contact-1 py-4 py-12">
            <div class="container mx-auto px-4">
                <div class="row">
                    <div class="col-md-12 mx-auto px-4">

                        <div class=" mb-4">
                            <h1 class="text-3xl text-medium mb-4">We would love to hear from you</h1>
                            <p class="text-xl mb-2">Please submit your information and we will get back to you.</p>
                            <!-- <p>Call us at <a href="tel:+12314561231" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 transition-colors duration-300"></a></p> -->
                        </div>

                        <div class="">

                            <div class="w-2/3 px-4">
                                <form method="post" action="contact.php">
                                    <div class="contact-form">
                                        <div class="">
                                            <div class=" px-3 mb-6">
                                                <input type="text" placeholder="Full Name" name="name" class="border-2 rounded px-3 py-1 w-full focus:border-indigo-400 input">
                                            </div>
                                            <div class=" px-3 mb-6">
                                                <input type="text" placeholder="Subject" name="subject" class="border-2 rounded px-3 py-1 w-full focus:border-indigo-400 input">
                                            </div>
                                            <div class=" px-3 mb-6">
                                                <input type="email" placeholder="E-mail address" name="email" class="border-2 rounded px-3 py-1 w-full focus:border-indigo-400 input">
                                            </div>
                                            <div class=" px-3 mb-6">
                                                <input type="text" placeholder="Phone Number" name="phone" class="border-2 rounded px-3 py-1 w-full focus:border-indigo-400 input">
                                            </div>
                                            <div class=" px-3">
                                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Your message here" class="border-2 rounded px-3 py-1 w-full focus:border-indigo-400 input"></textarea>
                                            </div>
                                        </div>
                                        <div class="text-right mt-4 mt-12">
                                            <button type="submit" name="sendmessage" class="border-2 border-indigo-600 rounded px-6 py-2 text-indigo-600 hover:bg-indigo-600 hover:text-white transition-colors duration-300">
                                                Send a Message
                                                <i class="fas fa-chevron-right ml-2 text-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class=" px-4 mt-10 mt-0">
                                <div class="bg-indigo-100 rounded py-4 px-6">
                                    <h5 class="text-xl font-medium mb-3">Help</h5>
                                    <p class="text-gray-700 mb-4">Need help or have any query? Don't hesitate, you can directly shoot us an <a href="mailto:" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 inline-block">email</a> or call us <a href="tel:" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 inline-block"></a></p>
                                    <p class="text-gray-700">You can move to <a href="#" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 inline-block">FAQs</a> or <a href="#" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 inline-block">Support</a> page to get more information about our site.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<?php

if(isset($_POST["sendmessage"])){

    $name=$_POST["name"];
    $subject=$_POST["subject"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];
$send=$home->contactsend($name, $subject, $email, $phone,  $message);

}

require("include/footer.php");

?>