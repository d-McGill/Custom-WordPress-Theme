<style>


.share-buttons {
    font-size: 0.7rem;
    line-height: 0.7rem;
    letter-spacing: 1px;
    margin: 0 0 60px;
    z-index: 2;
    position: relative;
    text-align: center;
    list-style-type: none;
    padding: 0;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-content: flex-start;
}

.share-buttons li {
    height: auto;
    flex: 0 1 auto;
    width: calc(25% - 1px);
    margin-right: 1px;
}

.share-buttons li:last-child {
    width: 25%;
    margin-right: 0;
}

.share-buttons svg {
    fill: #fff;
    margin-right: 5px;
    width: 16px;
    height: 16px;
}

.share-googleplus svg {
    width: 20px;
    height: 16px;
}

.share-buttons a {
    display: block;
    padding: 12px 12px 9px;
    text-align: center;
    color:#fff;
}

.share-buttons li:first-child a {
    border-radius: 3px 0 0 3px;
}

.share-buttons li:last-child a {
    border-radius: 0 3px 3px 0;
}

.share-twitter	{
    background: #1da1f2;
}

.share-facebook	{
    background: #3b5998;
}



.share-pinterest	{
    background: #b5071a;
}


.share-LinkedIn	{
    background: #0e76a8;
}



</style>

<div id="share-box">
  <p>Share this with your friends.....</p>
<ul class="share-buttons">
    <li>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>&amp;via=WPCrumbs" target="_blank">
            <span>Twitter</span>
        </a>
    </li>
    <li>
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank">
            <span>FaceBook</span>
        </a>
    </li>
    <li>
        <a class="share-pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&amp;media=<?php echo $media;   ?>&amp;description=<?php echo $title; ?>" target="_blank">
            <span>Pinterest</span>
        </a>
    </li>
    <li>
        <a class="share-LinkedIn" href="https://www.linkedin.com/shareArticle?mini=true&url=http://developer.linkedin.com&title=LinkedIn%20Developer%20Network&summary=My%20favorite%20developer%20program&source=LinkedIn<?php echo $url; ?>&amp;media=<?php echo $media;   ?>&amp;description=<?php echo $title; ?>" target="_blank">
            <span>LinedIn</span>
        </a>
    </li>
</ul>
</div>
