     <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>If you cannot find an answer to your question, 
        make sure to contact us or leave your question below.</p>
        </div>

        <div class="faq-list">
          <ul>
          <?php if(empty($faqs)){?>
          <div class="container bg-primary text-center text-light font-weight-bold">
              <p><?php echo "NOTE: No questions avaialable";?></p>
              </div>
          <?php
          }
          else
          {
          foreach ($faqs as $faq):?>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed"><?php echo $faq['question'];?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                 <?php echo $faq['reply'];?>
                </p>
              </div>
            </li>
          <?php endforeach;
          }?>
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    <br><br><br>