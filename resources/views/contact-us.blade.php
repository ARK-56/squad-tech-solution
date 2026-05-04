@php
    $pageTitle = "Contact Us";
    $pageDescription = "";
    $pageKeywords = "";
@endphp
<x-app-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageKeywords="$pageKeywords">
    <div class="banner contact-banner" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="font-40 bg center mtop-80 p-center">
            Let's Talk<br />about your project.
        </h1>
    </div>
    <div class="contact-us banner-flex" data-aos="fade-up" data-aos-duration="1000">
        <div class="form">
            <h2 class="bg mbot-20 font-30">Get In Touch</h2>
            <form method="post">
                <div style="display:flex">
                    <input type="text" name="fname" id="form-name" placeholder="First Name"
                        style="margin-right:10px" /><br />
                    <input type="text" name="lname" id="form-name" placeholder="Last Name" /><br />
                </div>
                <div style="display:flex">
                    <input type="text" name="number" id="form-number" placeholder="Number"
                        style="margin-right:10px" /><br />
                    <input type="email" name="email" id="form-email" placeholder="Email" /><br />
                </div>
                <input type="text" name="project_type" id="project_type" placeholder="Project Type" /><br />
                <textarea name="message" id="form-msg" cols="30" rows="10" placeholder="Message"></textarea><br />
                <button type="submit" class="primary-btn" name="msgBtn">Send Message</button>
            </form>
        </div>
        <div class="contact">
            <h2 class="bg mbot-10 font-30">Contact Info</h2>
            <h3 class="mbot-10">Let's Talk.</h3>
            <p>inquiry@squadtechsol.com</p>
            <p>+1 (201) 820-6889</p>

            <h3 class="mtop-10 mbot-10">Visit Us.</h3>
            <p>276 Holten Ave,</p>
            <p>Staten Island, NY</p>
            <p>10309</p>
        </div>
    </div>
    @php
        if (isset($_POST["msgBtn"])) {
            $name = $_POST["fname"] . $_POST["lname"];
            $number = $_POST["number"];
            $email = $_POST["email"];
            $project_type = $_POST["project_type"];
            $project_description = $_POST["message"];

            $sender = $email;
            $recipient = 'sales@squadtechsolution.com';

            $subject = "Contact Form Submission";
            $message = "
                                                                                                                                                                                                                                                                            Customer Information
                                                                                                                                                                                                                                                                            Customer Name = $name
                                                                                                                                                                                                                                                                            Customer Email = $email
                                                                                                                                                                                                                                                                            Customer Number = $number
                                                                                                                                                                                                                                                                            Project Type = $project_type
                                                                                                                                                                                                                                                                            Project Description = $project_description
                                                                                                                                                                                                                                                                            ";
            $headers = 'From:' . $sender;

            if (mail($recipient, $subject, $message, $headers)) {
                echo "
                                                                                                                                                                                                                                                                            <script>
                                                                                                                                                                                                                                                                                alert('Form Submitted')
                                                                                                                                                                                                                                                                            </script>
                                                                                                                                                                                                                                                                            ";
            } else {
                echo "
                                                                                                                                                                                                                                                                            <script>
                                                                                                                                                                                                                                                                                alert('Plz Try Again')
                                                                                                                                                                                                                                                                            </script>
                                                                                                                                                                                                                                                                            ";
            }
        }
    @endphp
</x-app-layout>
