<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'name' =>'How do I change my password?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do I sign up?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate et laudantium esse adipisci consequatur modi possimus accusantium vero atque excepturi nobis in doloremque repudiandae soluta non minus dolore voluptatem enim reiciendis officia voluptates, fuga ullam? Voluptas reiciendis cumque molestiae unde numquam similique quas doloremque non, perferendis doloribus necessitatibus itaque dolorem quam officia atque perspiciatis dolore laudantium dolor voluptatem eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit ullam, consequuntur, saepe voluptas quaerat deleniti. Repellendus magni sint temporibus, accusantium rem commodi?'
        ]);
        DB::table('questions')->insert([
            'name' =>'Can I remove a post?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do reviews work?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How does syncing work?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do I upload files from my phone or tablet?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempore, placeat quisquam rerum! Eligendi fugit dolorum tenetur modi fuga nisi rerum, autem officiis quaerat quos. Magni quia, quo quibusdam odio. Error magni aperiam amet architecto adipisci aspernatur! Officia, quaerat magni architecto nostrum magnam fuga nihil, ipsum laboriosam similique voluptatibus facilis nobis? Eius non asperiores, nesciunt suscipit veniam blanditiis veritatis provident possimus iusto voluptas, eveniet architecto quidem quos molestias, aperiam eum reprehenderit dolores ad deserunt eos amet. Vero molestiae commodi unde dolor dicta maxime alias, velit, nesciunt cum dolorem, ipsam soluta sint suscipit maiores mollitia assumenda ducimus aperiam neque enim! Quas culpa dolorum ipsam? Ipsum voluptatibus numquam natus? Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae, molestias!'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do I link to a file or folder?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do I change my password?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum autem consectetur labore eius tenetur esse, in temporibus sequi cum voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae necessitatibus, unde, deserunt voluptas possimus veniam magni soluta deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam! Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates corrupti, minus! Possimus, perspiciatis!'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do I delete my account?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo tempore soluta, minus magnam non blanditiis dolore, in nam voluptas nobis minima deserunt deleniti id animi amet, suscipit consequuntur corporis nihil laborum facere temporibus. Qui inventore, doloribus facilis, provident soluta voluptas excepturi perspiciatis fugiat odit vero! Optio assumenda animi at! Assumenda doloremque nemo est sequi eaque, ipsum id, labore rem nisi, amet similique vel autem dolore totam facilis deserunt. Mollitia non ut libero unde accusamus praesentium sint maiores, illo, nemo aliquid?'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do I change my account settings?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'I forgot my password. How do I reset it?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum at aspernatur iure facere ab a corporis mollitia molestiae quod omnis minima, est labore quidem nobis accusantium ad totam sunt doloremque laudantium impedit similique iste quasi cum! Libero fugit at praesentium vero. Maiores non consequuntur rerum, nemo a qui repellat quibusdam architecto voluptatem? Sequi, possimus, cupiditate autem soluta ipsa rerum officiis cum libero delectus explicabo facilis, odit ullam aperiam reprehenderit! Vero ad non harum veritatis tempore beatae possimus, ex odio quo.'
        ]);
        DB::table('questions')->insert([
            'name' =>'Can I have an invoice for my subscription?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.'
        ]);
        DB::table('questions')->insert([
            'name' =>'Why did my credit card or PayPal payment fail?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur accusantium dolorem vel, ad, nostrum natus eos, nemo placeat quos nisi architecto rem dolorum amet consectetur molestiae reprehenderit cum harum commodi beatae necessitatibus. Mollitia a nostrum enim earum minima doloribus illum autem, provident vero et, aspernatur quae sunt illo dolorem. Corporis blanditiis, unde, neque, adipisci debitis quas ullam accusantium repudiandae eum nostrum quis! Velit esse harum qui, modi ratione debitis alias laboriosam minus eaque, quod, itaque labore illo totam aut quia fuga nemo. Perferendis ipsa laborum atque assumenda tempore aspernatur a eos harum non id commodi excepturi quaerat ullam, explicabo, incidunt ipsam, accusantium quo magni ut! Ratione, magnam. Delectus nesciunt impedit praesentium sed, aliquam architecto dolores quae, distinctio consectetur obcaecati esse, consequuntur vel sit quis blanditiis possimus dolorum. Eaque architecto doloremque aliquid quae cumque, vitae perferendis enim, iure fugiat, soluta aut!'
        ]);
        DB::table('questions')->insert([
            'name' =>'Why does my bank statement show multiple charges for one upgrade?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'Can I specify my own private key?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.'
        ]);
        DB::table('questions')->insert([
            'name' =>'My files are missing! How do I get them back?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How can I access my account data?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus magni vero deserunt enim et quia in aliquam, rem tempore voluptas illo nisi veritatis quas quod placeat ipsa! Error qui harum accusamus incidunt at libero ipsum, suscipit dolorum esse explicabo in eius voluptates quidem voluptatem inventore amet eaque deserunt veniam dignissimos excepturi? Dolore, quo amet nostrum autem nemo. Sit nam assumenda, corporis ea sunt distinctio nostrum doloribus alias, beatae nesciunt dolore saepe consequuntur minima eveniet porro dolor officiis maiores ab obcaecati officia enim aliquam. Itaque fuga molestiae hic accusantium atque corporis quia id sequi enim vero? Hic aperiam sint facilis aliquam quia, accusamus tenetur earum totam enim est, error. Iusto, reiciendis necessitatibus molestias. Voluptatibus eos explicabo repellat nesciunt nam vero minima.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How can I control if other search engines can link to my profile?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>"What should I do if my order hasn\'t been delivered yet?",
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How can I find your international delivery information?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'Who takes care of shipping?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do returns or refunds work?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How do I use shipping profiles?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How does your UK Next Day Delivery service work?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'How does your Next Day Delivery service work?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'When will my order arrive?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);
        DB::table('questions')->insert([
            'name' =>'When will my order ship?',
            'author' => '',
            'author_email' => '',
            'status' => 'public',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.'
        ]);

    }
}
