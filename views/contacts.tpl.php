<section>
    <h4> <?= $firstDescription; ?></h4>

    <form>

        <input type="text" id="fullName" placeholder="<?= $fullName ?>" required/>
        <input type="text" id="subject" placeholder="<?= $subject ?>" required/>

        <textarea id="message" placeholder="<?= $message ?>" required></textarea>

        <input type="submit" value="<?= $send ?>"/>

        <p class="statusMessage"></p>

    </form>
</section>

<script type="text/javascript">

    $(document).on('ready', function () {
        $("form").on('submit', function () {
            $(".statusMessage").html("<?= $statusMessage; ?>");
            return false;
        });
    });

</script>