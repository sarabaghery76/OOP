<div class="content">
    <?php foreach($news as $ns) { ?>
    <div class="post">
        <table>
            <tr>
                <table>
                    <tr>
                        <td>
                            <div class="title"><h3><?php echo $ns['title']; ?></h3></div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="pic"><img src="<?php echo BASE_URL ."public/img/". $ns['pic']; ?>"/></div>
                        </td>

                        <td>
                            <div class="note"><?php echo $ns['excerpt']; ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="link">
                                <a class="readMore" href="news/get_one?id=<?php echo $ns['id']; ?>"> مشاهده کامل خبر</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </tr>
        </table>
    </div>
    <?php } // end of foreach ?>
</div>