<?php if( get_plugin_options('contact_plugin_active') ):?>


<div id="form_success" style="background-color:green; color:#fff;"></div>
<div id="form_error" style="background-color:red; color:#fff;"></div>


    <div id="container">
        <h3>Get In Touch</h3>
        <form id="enquiry_form">
            <?php wp_nonce_field('wp_rest');?>

            <div class="form-group">
                <label for="name">Name : </label>
                <input type="text" id="name" name="name" placeholder="Enter your name..." required>
            </div>

            <div class="form-group">
                <label for="name">Phone : </label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone..." required>
            </div>

            <div class="form-group">
                <label for="email">Email : </label>
                <input type="email" id="email" name="email" placeholder="Enter your email..." required>
            </div>

            <div class="form-group">
                <label for="message">Message : </label>
                <textarea id="message" name="message" placeholder="Enter your message..." required></textarea>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

<script>

      jQuery(document).ready(function($){


            $("#enquiry_form").submit( function(event){

                  event.preventDefault();

                  $("#form_error").hide();

                  var form = $(this);

                  $.ajax({


                        type:"POST",
                        url: "<?php echo get_rest_url(null, 'v1/contact-form/submit');?>",
                        data: form.serialize(),
                        success:function(res){

                              form.hide();

                              $("#form_success").html(res).fadeIn();


                        },
                        error: function(){

                              $("#form_error").html("There was an error submitting").fadeIn();
                        }


                  })


            });


      });

</script>

<?php else:?>

<p>This form is not active</p>

<?php endif;?>