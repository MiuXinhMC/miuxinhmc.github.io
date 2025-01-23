<?php
/**
 * @package Do Duc Danh
 * @author  Do Duc Danh <www.facebok.com/DanhCSS>
 */
interface DucDanhConfigInterface {
    public function CommonMethod();
}
class DucDanhHeader implements DucDanhConfigInterface {
    public $title = " Thanh Diệu | Resources V5";
    public $description = "Hi my name is DucDanh / A freelance / web developer / vexer";
    public $keywords = "DucDanh,web Do Duc Danh,Do Duc Danh,dvpcloud,TeamWork,MineaHiHi,DucDanh home,profile DucDanh";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "DucDanh | HOME";
    public $avatar = "./res/v5/img/avatar.gif";
    public $userName = ["Hello Everybody", "My name is DucDanh.", "I really like website design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đam mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư phát triển front-end";
    public $bio4 = "Thích làm thần tượng Minecraft 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://www.facebook.com/DanhCSS", // Thay link facebook
        "instagram" => "https://www.instagram.com", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/", // Thay link tiktok
        "telegram" => "https://t.me" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}


class DucDanhLoveDays implements DucDanhConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "DucDanh", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.jpeg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "Hong Anh", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "1/1/2021" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class DucDanhMusicList implements DucDanhConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/wzwx4r.mp3",
            "avatar" => "https://ibb.co/Th40N2k",
            "title" => "2AM Lofi",
            "author" => "YouTube"
        ],
        [
            "url" => "https://files.catbox.moe/c4w3w9.mp3",
            "avatar" => "https://ibb.co/CVXHyF4",
            "title" => "3017 2 Lofi",
            "author" => "YouTube"
        ],
        [
            "url" => "https://files.catbox.moe/ut60s8.mp3",
            "avatar" => "https://ibb.co/R41HzFY",
            "title" => "Lao Tâm Khổ Tứ Remix",
            "author" => "YouTube"
        ],
        [
            "url" => "https://files.catbox.moe/1qy6uj.mp3",
            "avatar" => "https://ibb.co/Tw0QTzG",
            "title" => "Ai là người thương em Remix",
            "author" => "YouTube"
        ],
        [
            "url" => "https://files.catbox.moe/xzgwqq.mp3",
            "avatar" => "https://ibb.co/CtMG7tw",
            "title" => "Bán tấm chân tình Remix",
            "author" => "YouTube"
        ],
        [
            "url" => "https://files.catbox.moe/gbvcou.mp3",
            "avatar" => "https://ibb.co/Cm0KPm7",
            "title" => "EDM 1",
            "author" => "YouTube"
        ],
        [
            "url" => "https://files.catbox.moe/48en5n.mp3",
            "avatar" => "https://ibb.co/XX0BrBQ",
            "title" => "EDM 2",
            "author" => "YouTube"
        ],
        [
            "url" => "https://files.catbox.moe/3qr64x.mp3",
            "avatar" => "https://ibb.co/VLnwkJr",
            "title" => "EDM 3",
            "author" => "YouTube"
        ],
        [
            "url" => "https://files.catbox.moe/48en5n.mp3",
            "avatar" => "https://ibb.co/VLnwkJr",
            "title" => "EDM 4",
            "author" => "YouTube"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
