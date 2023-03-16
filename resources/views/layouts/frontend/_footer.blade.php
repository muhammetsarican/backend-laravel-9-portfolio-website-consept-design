    <!-- Footer - Start -->
    <section id="footer">
        <div class="logo">
            <p>Muhammet S.</p>
            <p>Web Designer</p>
            <span><a href="mailto:muhammetsarican.info@gmail.com"><img src="icons/gmail.png" alt=""></a></span>
        </div>
        <div class="mail-form">
            <div class="info">
                <p>Free Download</p>
                <p>If you want to use my portfolio, you can download as template with fill the form at below.
                </p>
            </div>
            <div class="form">
                <form action="{{route('template_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" id="" placeholder="First Name">
                    <input type="email" name="mail" id="" placeholder="Mail">
                    <input type="submit" value="Download" class="download-button">
                </form>
            </div>
        </div>
    </section>
    <!-- Footer - End -->