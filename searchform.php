<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group" style="max-width: 500px; margin: 0 auto;">
        <input type="search" class="form-control" placeholder="<?php echo esc_attr_x('Cari...', 'placeholder', 'jaffranprewed'); ?>" value="<?php echo get_search_query(); ?>" name="s" style="border: 2px solid var(--primary-color); padding: 12px 20px; border-radius: 50px 0 0 50px;">
        <button type="submit" class="btn" style="background: var(--primary-color); color: white; border: 2px solid var(--primary-color); border-radius: 0 50px 50px 0; padding: 12px 30px;">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>
