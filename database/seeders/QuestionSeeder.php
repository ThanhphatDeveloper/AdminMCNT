<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Category;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::where('name', 'Khoa học')->first()->questions()->createMany([
            [
                'question'=>"Lý do nào khiến sao Hỏa còn được gọi là hành tinh đỏ?",
                'a'=>"Bề mặt có màu đỏ đặc trưng",
                'b'=>"Sở hữu nhiều núi lửa nhất Hệ Mặt trời",
                'c'=>"Nhiệt độ cao nhất sếp sau mặt trời",
                'd'=>"Tất cả đều đúng",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Sao Hỏa có bao nhiêu vệ tinh tự nhiên?",
                'a'=>"2",
                'b'=>"1",
                'c'=>"3",
                'd'=>"7",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Kích thước sao Hỏa so với Trái đất như thế nào?",
                'a'=>"Bán kính sao Hỏa bằng một nửa Trái đất",
                'b'=>"Bán kính sao Hỏa gấp đôi đường kính Trái đất",
                'c'=>"Bán kính sao Hỏa gấp ba đường kính Trái đất",
                'd'=>"Gấp 1.8 lần trái đất",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Điều nào sau đây mô tả đúng về sao Hỏa?",
                'a'=>"Chất hữu cơ tồn tại trên sao Hỏa",
                'b'=>"Khí quyển sao Hỏa đậm đặc hơn Trái đất",
                'c'=>"sao Hỏa nóng hơn Trái đất",
                'd'=>"Tất cả đều đúng",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Hành tinh nào có hệ vành đai mở rộng nhất trong Hệ Mặt trời?",
                'a'=>"Sao Thổ",
                'b'=>"Sao Thủy",
                'c'=>"Sao Hỏa",
                'd'=>"Sao Thiên Vương",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Sao Thổ là hành tinh lớn thứ bao nhiêu trong Hệ Mặt trời?",
                'a'=>"2",
                'b'=>"3",
                'c'=>"4",
                'd'=>"5",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Sao Thổ được đặt tên theo vị thần nào?",
                'a'=>"Thần nông nghiệp",
                'b'=>"Thần chiến tranh",
                'c'=>"Thần sắc đẹp",
                'd'=>"Thần hủy diệt",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Vệ tinh lớn nhất của sao Thổ là gì?",
                'a'=>"Titan",
                'b'=>"Io",
                'c'=>"Ganymede",
                'd'=>"X",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Tàu vũ trụ nào của NASA kết thúc sứ mệnh khám phá sao Thổ bằng cách đâm thẳng xuống hành tinh này, sau 20 năm được phóng lên không gian?",
                'a'=>"Cassini",
                'b'=>"Juno",
                'c'=>"MarCO-A và MarCO-B",
                'd'=>"X",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Cấp độ thấp nhất hoạt động độc lập trong cơ thể đa bào là",
                'a'=>"Cassini",
                'b'=>"Juno",
                'c'=>"X",
                'd'=>"Y",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Tập hợp các mô thực hiện cùng một chức năng là?",
                'a'=>"Cơ quan",
                'b'=>"Mô",
                'c'=>"Hệ cơ quan",
                'd'=>"Hệ cơ quan",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Hệ cơ quan ở thực vật bao gồm?",
                'a'=>"Hệ chồi và hệ rễ",
                'b'=>"Hệ thân và hệ lá",
                'c'=>"Hệ rễ và hệ thân",
                'd'=>"Hệ cơ quan",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Hệ tuần hoàn được cấu tạo bởi các cơ quan nào sau đây?",
                'a'=>"Tim và hệ mạch",
                'b'=>"Tim, máu và hệ mạch",
                'c'=>"Hệ mạch và máu",
                'd'=>"Tim và máu ",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ]
            ,
            [
                'question'=>"Cơ quan nào sau đây thuộc hệ thần kinh ở người?",
                'a'=>"Não",
                'b'=>"Tim",
                'c'=>"Phổi",
                'd'=>"Dạ dày",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ],
            [
                'question'=>"Trình từ sắp xếp các cấp tổ chức của cơ thể đa bào theo thứ tự từ nhỏ đến lớn là?",
                'a'=>"Tế bào à mô à cơ quan à hệ cơ quan à cơ thể",
                'b'=>"Cơ thể à hệ cơ quan à cơ quan à tế bào à mô",
                'c'=>"Tế bào à cơ quan à hệ cơ quan à cơ thể à mô",
                'd'=>"Mô à tế bào à hệ cơ quan à cơ quan à cơ thể",
                'score'=>1,
                'status'=>1,
                'category_id'=>3
            ]
        ]);
        Category::where('name', 'Địa lí')->first()->questions()->createMany([
            [
                'question'=>"Vùng đất là:",
                'a'=>"toàn bộ phần đất liền và các hải đảo",
                'b'=>"phần đất liền giáp biển",
                'c'=>"phần được giới hạn bởi các đường biên giới và đường bờ biển",
                'd'=>"các hải đảo và vùng đồng bằng ven biển",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Nước ta có 4600km đường biên giới trên đất liền, 3260km đường bờ biển,… là đặc điểm của vùng",
                'a'=>"đất",
                'b'=>"biển",
                'c'=>"trời",
                'd'=>"nội thủy",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Đường biên giới dài nhất trên đất liền nước ta là với quốc gia nào sau đây",
                'a'=>"Lào",
                'b'=>"Trung Quốc",
                'c'=>"Campuchia",
                'd'=>"Thái Lan",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Nước ta có đường biên giới trên đất liền với",
                'a'=>"Trung Quốc, Lào, Campuchia",
                'b'=>"Lào, Thái Lan, Campuchia",
                'c'=>"Trung Quốc, Campuchia, Thái Lan",
                'd'=>"Trung Quốc, Lào, Mi-an-ma",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Nước ta nằm ở vị trí: ",
                'a'=>"rìa phía Đông của bán đảo Đông Dương",
                'b'=>"rìa phía Tây của bán đảo Đông Dương.",
                'c'=>"trung tâm châu Á",
                'd'=>"phía đông Đông Nam Á",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Căn cứ vào Atlat Địa lí Việt Nam trang 23, cho biết cửa khẩu nào sau đây nằm trên đường biên giới Việt Nam –  Lào?",
                'a'=>"Cầu Treo.",
                'b'=>"Mường Khương",
                'c'=>"Lệ Thanh",
                'd'=>"Móng Cái.",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Bộ phận nào sau đây được xem như bộ phận lãnh thổ trên đất liền",
                'a'=>"Nội thủy",
                'b'=>"Lãnh hải",
                'c'=>"Vùng đặc quyền kinh tế",
                'd'=>"Thềm lục địa",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Nội thủy là",
                'a'=>"vùng nước tiếp giáp với đất liền, ở phía trong đường cơ sở.",
                'b'=>"vùng nước tiếp giáp với lãnh hải",
                'c'=>"vùng nước tiếp giáp với đặc quyền kinh tế",
                'd'=>"vùng nước tiếp giáp với thềm lục địa",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Hiện nay, về vấn đề cắm mốc phân định chủ quyền biên giới quốc gia Việt Nam cần tiếp tục đàm phán với:",
                'a'=>"Cam-pu-chia và Trung Quốc",
                'b'=>"Trung Quốc, Lào và Cam-pu-chia",
                'c'=>"Lào và Cam- pu - chia",
                'd'=>"Trung Quốc và Lào",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Trên đất liền, nước ta không có chung biên giới với nước nào?",
                'a'=>"Thái Lan",
                'b'=>"Lào",
                'c'=>"Trung Quốc",
                'd'=>"Campuchia",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Thiên nhiên nước ta bốn mùa xanh tươi khác hẳn với các nước có cùng độ vĩ ở Tây Á, châu Phi là nhờ",
                'a'=>"Nước ta nằm tiếp giáp Biển Đông với chiều dài bờ biển trên 3260 km",
                'b'=>"Nước ta nằm ở vị trí tiếp giáp của nhiều hệ thống tự nhiên",
                'c'=>"Nước ta nằm ở trung tâm vùng Đông Nam Á.",
                'd'=>"Nước ta nằm hoàn toàn trong vùng nội chí tuyến.",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Nhờ có biển Đông mà nước ta có",
                'a'=>"Thiên nhiên nước ta bốn mùa xanh tươi",
                'b'=>"Thiên nhiên nhiệt đới gió mùa với mùa đông lạnh",
                'c'=>"Thiên nhiên phân hóa đa dạng theo độ cao",
                'd'=>"Khí hậu khô, nóng với các nước ở Tây Á, châu Phi",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Nằm ở vị trí tiếp giáp giữa lục địa và đại dương trên vành đai sinh khoáng Thái Bình Dương, nên Việt Nam có nhiều",
                'a'=>"Tài nguyên khoáng sản",
                'b'=>"Tài nguyên sinh vật quý giá.",
                'c'=>"Bão và lũ lụt",
                'd'=>"Vùng tự nhiên khác nhau trên lãnh thổ",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            [
                'question'=>"Nước ta giàu có về tài nguyên khoáng sản là do",
                'a'=>"nằm trên vành đai sinh khoáng Thái Bình Dương và Địa Trung Hải",
                'b'=>"tiếp giáp với đường hàng hải, hàng không quốc tế",
                'c'=>"nằm liền kề với vành đai lửa Thái Bình Dương và Địa Trung Hải",
                'd'=>"nằm trên đường di cư, di lưu của nhiều động thực vật",
                'score'=>1,
                'status'=>1,
                'category_id'=>4
            ],
            
        ]);



        //
        Category::where('name','Toán')->first()->questions()->createMany([
            ['question'=>"1+1",
            'a'=>'1',
            'b'=>'2',
            'c'=>'3',
            'd'=>'4',
            'score'=>1,
            'status'=>1,
            'category_id'=>1,
        ],
            [
                'question'=>"1+2",
            'a'=>'3',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
            'status'=>1,
            'category_id'=>1,

            ],
            [
            'question'=>"1+4",
            'a'=>'5',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
            'status'=>1,
            'category_id'=>1,

            ],
            [
                'question'=>"2+2",
            'a'=>'4',
            'b'=>'2',
            'c'=>'1',
            'd'=>'3',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],

            ['question'=>"1+1",
            'a'=>'1',
            'b'=>'2',
            'c'=>'3',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,
        ],
            [
                'question'=>"1+2",
            'a'=>'3',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],
            [
                'question'=>"1+4",
            'a'=>'5',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],
            [
                'question'=>"2+2",
            'a'=>'4',
            'b'=>'2',
            'c'=>'1',
            'd'=>'3',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ]
,

['question'=>"1+1",
            'a'=>'1',
            'b'=>'2',
            'c'=>'3',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,
        ],
            [
                'question'=>"1+2",
            'a'=>'3',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],
            [
                'question'=>"1+4",
            'a'=>'5',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],
            [
                'question'=>"2+2",
            'a'=>'4',
            'b'=>'2',
            'c'=>'1',
            'd'=>'3',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ]
,
['question'=>"1+1",
            'a'=>'1',
            'b'=>'2',
            'c'=>'3',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,
        ],
            [
                'question'=>"1+2",
            'a'=>'3',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],
            [
                'question'=>"1+4",
            'a'=>'5',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],
            [
                'question'=>"2+2",
            'a'=>'4',
            'b'=>'2',
            'c'=>'1',
            'd'=>'3',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ]
,
['question'=>"1+1",
            'a'=>'1',
            'b'=>'2',
            'c'=>'3',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,
        ],
            [
                'question'=>"1+2",
            'a'=>'3',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],
            [
                'question'=>"1+4",
            'a'=>'5',
            'b'=>'2',
            'c'=>'1',
            'd'=>'4',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ],
            [
                'question'=>"2+2",
            'a'=>'4',
            'b'=>'2',
            'c'=>'1',
            'd'=>'3',
            'score'=>1,
                'status'=>1,
        'category_id'=>1,

            ]


        ]);
    }
}
