window.onload = function(){
 bioEp.init({
        html: '<div id="bio_ep_content">' +
        '<img src="http://beeker.io/images/posts/2/tag.png" alt="Claim your discount!" />' +
        '<span>HOLD ON!</span>' +
        '<input type="text" name="nome" placeholder="Nome" required />' +
        '<input id="email" type="email" placeholder="E-mail" class="validate" required/>' +
        '<br>' +
        '<a href="#YOURURLHERE" class="bio_btn">CADASTRE-SE</a>' +
        '</div>',
        css: '#bio_ep {width: 600px; height: 400px; color: #333; background-color: #fafafa; text-align: center;}' +
        '#bio_ep_content {padding: 24px 0 0 0; font-family: "Titillium Web";}' +
        '#bio_ep_content input {width:60%;}' +
        '#bio_ep_content span:nth-child(2) {display: block; color: #f21b1b; font-size: 32px; font-weight: 600;}' +
        '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 7px; color: black; font-size: 14px; font-weight: 600; background-color: #70bb39; border: 1px solid #47ad0b; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 0; text-decoration: none;}',
        fonts: ['//fonts.googleapis.com/css?family=Titillium+Web:300,400,600'],
        cookieExp: 0
    });
}