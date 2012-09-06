<?
include 'seoreport.php';

ini_set('max_execution_time', 180);
 

    $url = (isset($_GET['url']))?$_GET['url']:'http://phpclasses.org';

    $meta_tags = seoreport::meta_info($url);
			//die(var_dump($meta_tags));

			
	//first check if site online
	if ($meta_tags!==FALSE)
	{
		$stats = array();
	
        $stats['meta']                  = $meta_tags;
		$stats['alexa']['rank'] 		= seoreport::alexa_rank($url);
		$stats['alexa']['links'] 		= seoreport::alexa_links($url);

		$stats['domain']['WOT_rating'] 	= seoreport::WOT_rating($url);	
		$stats['domain']['domain_age'] 	= seoreport::domain_age($url);	
		$stats['social']['twitter'] 	= seoreport::tweet_count($url);	
		$stats['social']['facebook'] 	= seoreport::facebook_shares($url);	
		$stats['google']['page_rank'] 	= seoreport::page_rank($url);
		$stats['google']['page_speed'] 	= seoreport::page_speed($url);
		$stats['google']['pages'] 		= seoreport::google_pages($url);
		$stats['google']['links'] 		= seoreport::google_links($url);

        var_dump($stats);

    }
    else 'Site not online. '.$url;
        
