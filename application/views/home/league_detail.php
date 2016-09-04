<h1><?php echo $league->league_name; ?></h1>

<img src="<?php echo base_url();?>uploads/square/<?php echo $league->league_image; ?>"> <br>

<?php foreach ($allclubofleague as $a):?>

<h4><a href="<?php echo base_url();?>index.php/home/club_detail/<?php echo $a->club_id;?>"> <img src="<?php echo base_url();?>uploads/thumb/<?php echo $a->club_image; ?>"> <?php echo $a->club_name; ?></a> </h4> &nbsp;
 <?php endforeach;?>

 <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = ''; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>
    Please enable JavaScript to view the 
    <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
    </noscript>
    