<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();
        $post->title = 'Hoc lap trinh';
        $post->content = 'Công cụ lập trình web là một trong những trợ thủ đặc lực cho Web Development chuyển nghiệp. Các công cụ lập trình web này sẽ giúp cho nhà lập trình làm việc một cách hiệu quả và chính xác hơn. Chính vì vậy sẽ tạo ra những sản phẩm chất lượng hơn. Để có thể giúp...';
        $post->image = '';
        $post->user_id = 1;
        $post->save();

        $post = new \App\Post();
        $post->title = 'Cam nang cho nguoi moi bat dau';
        $post->content = 'Bất cứ ai cũng có thể học lập trình, nhưng lập trình không dành cho tất cả mọi người Có 2 trường hợp: Trường hợp 1: Lập trình dành cho tất cả mọi người. Tôi tin đi mọi người đều có thể học được lập trình cũng như có thể viết mã. Lập trình nó là một kĩ năng cho tất cả...';
        $post->image = '';
        $post->user_id = 1;
        $post->save();
    }
}
