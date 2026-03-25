<?php get_header(); ?>

<main>
    <section class="page_child">
        <div class="page_child_wrapper">
            <div class="page_child_title">
                <h1>お問い合わせ</h1>
                <p>Contact foam</p>
            </div>
        </div>
    </section>

    <section class="page_contactform">
        <div class="page_contactform_inner">
            <div class="contactform_title">
                <p class="contact_anounce">事業に関するご質問などお気軽にお問い合わせください。<br>
                    3営業日以内にご連絡させていただきます。</p>
            </div>
            <div class="contactform_box fade-in">
                <div class="page_contact_main_box">
                    <dl>
                        <dt class="must">
                            <label for="name">
                                お名前<span class="required">必須</span>
                            </label>
                            </dt>
                        <dd class="input_flex">
                            <input type="text" id="name" name="name">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="must">
                            <label for="name">
                                フリガナ<span class="required">必須</span>
                            </label>
                            </dt>
                        <dd class="input_flex">
                            <input type="text" id="name" name="name">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="must">
                            <label for="name">郵便番号</label>
                            </dt>
                        <dd class="input_flex">
                            <input type="text" id="name" name="name">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="must">
                            <label for="name">ご住所</label>
                            </dt>
                        <dd class="input_flex">
                            <input type="text" id="name" name="name">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="must">
                            <label for="name">
                                お電話番号<span class="required">必須</span>
                            </label>
                            </dt>
                        <dd class="input_flex">
                            <input type="text" id="name" name="name">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="must">
                            <label for="name">
                                メールアドレス<span class="required">必須</span>
                            </label>
                            </dt>
                        <dd class="input_flex">
                            <input type="text" id="name" name="name">
                        </dd>
                    </dl>
                    <dl class="no-border">
                    <dt class="must">
                        <label>
                        種別<span class="required">必須</span>
                        </label>
                    </dt>
                    <dd class="input_flex type_checkboxes">
                        <label>
                        <input type="checkbox" name="type[]" value="中古物件について">
                        中古物件について
                        </label>
                        <label>
                        <input type="checkbox" name="type[]" value="当社の賃貸物件について">
                        当社の賃貸物件について
                        </label>
                        <label>
                        <input type="checkbox" name="type[]" value="賃貸物件について">
                        賃貸物件について
                        </label>
                        <label>
                        <input type="checkbox" name="type[]" value="新築アパートについて">
                        新築アパートについて
                        </label>
                        <label>
                        <input type="checkbox" name="type[]" value="その他">
                        その他
                        </label>
                    </dd>
                    </dl>
                    <dl>
                        <dt class="must">
                            <label for="name">
                                お問い合わせ項目<span class="required">必須</span>
                            </label>
                            </dt>
                        <dd>
                            <input type="text" id="name" name="name">
                        </dd>
                    </dl>
                    <dl class="textarea_border">
                        <dt class="must">
                            <label for="name">
                                お問い合わせ内容<span class="required">必須</span>
                            </label>
                            </dt>
                        <dd class="input_border textarea_speace">
                            <textarea id="notes" name="notes"></textarea>
                        </dd>
                        </dl>
                    <div class="pparea_btnbox">
                        <label class="pp_checkbox">
                            <input type="checkbox" name="agree" id="agree">
                            <span><a href="<?php echo get_stylesheet_directory_uri(); ?>/privacy">プライバシーポリシー</a>に同意する</span>
                        </label>
                        </div>
                    <div class="page_contact_formbtnarea">
                            <a href="" class="page_contact_formbtn view_btn">送信する</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>