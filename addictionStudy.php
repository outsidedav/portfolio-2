<!DOCTYPE html>
<html data-wf-page="5a39e1e80edbf40001953722" data-wf-site="592103a916b99b0139ddc5c3">

<!--    php head include-->
    <?php include 'php/head.php'; ?>
<!--php head end-->

<body class="body-2">
    <div>
<!--      php nav include-->
    <?php include 'php/nav.php'; ?>
<!--        php nav end-->
        <div class="project-background-div"> <img src="images/dhrbg.png">
        </div>
        <div class="heading-wrapper w-container">
            <h6 class="category"><span class="highlight" id="uxhighlight">UX Design &amp; Developement</span></h6>
            <h1 class="project-page-h1">Digital Health Report</h1>
            <h2 class="project-page-h2">A wellness report for websites</h2>
        </div>

    </div>

    <!-- Page One Intro ////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="project-section">
        <div class="w-container">

            <h2>Project Summary</h2>

            <p>Over the course of the semester, we identified a number of areas from the internet ecosystem where users didn’t have enough information to make informed decisions about the services they use. We designed a browser extension, called Digital Health Report, that helps users understand how they could be impacted by using the service before they sign up. Digital Health Report aims to give users much needed information about a digital service based on its propensity for addiction, privacy, security issues, and it's terms of service, among other metrics. Much of the work we produced for the class concentrated on the addiction aspect. This is because it's the least explored category and is a crucial part of the attention economy that underlies much of the internet. Our goal in exploring addiction was to determine how to best categorize addictive design elements in order to grade them. In addition to the deep dive into tech addiction, we have created top level designs and a prototype that illustrates how we might work with available APIs relevant to security and terms of service.</p>
        </div>
    </div>
    <div class="slide">
        <object data="images/dhr/slide1.svg" type="image/svg+xml"></object>
    </div>



    <!--Page Three Design Process  /////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="project-section">
        <div class="w-container">
            <h2>Addiction and the Attention Economy</h2>

            <p>The attention economy is at the heart of many problems we encounter online and has disincentivized companies such as Google and Facebook to create healthier, less addictive platforms. The impact of the attention economy can been seen in the lax privacy rules and disenfranchising terms of service contracts that digital services force users to agree to, the pervasiveness of social bubbles, and the erosion of traditional news media. While the attention economy may have originally been understood broadly as the commodification of attention, it now refers to the hyper-efficient and extremely personalized targeted ad ecosystem of the internet. It is by far the biggest economic force online and increasing bleeds into many other aspects of our lives.</p>

            <p>This idea of hyper-efficiency, which David Carroll explained in detail in his Monetizing Privacy lecture, comes down to the fact that traditionally advertisers assumed a lot of wasted spending because they were unable to accurately understand the impact of their advertising efforts. With the rise of massive collections of user profiles, advertisers can more accurately predict who will be receptive to their product and directly target those individuals. In order to continually collect more data on users, to fuel these advertising metrics, platforms are highly incentivized to keep users on their platforms for as long a possible and encourage them to return often. The data is collected through user behaviour, such as the like button, coupled with network analysis. When scaled, this data generates valuable incites for advertisers.</p>
            
            <p>Particular design methods are used to encourage cyclical behavior and increase user activity. This approach to design is not new, but current technology has allowed them to be optimized and tested to an excessive degree. Many of the basic design principles found in addictive digital design have been well known and used by various industries for years. For example, Don Norman’s concept of visceral design, which predates the current moment, is a crucial element of “eye catchability” which is central to variable rewards and distraction schemes. In the same way that the advertising economy has been made more efficient, the scale of these platforms allows the companies that operate them to test the impact of their designs for stickiness</p>
        </div>
    </div>
    <div class="slide">
        <object data="images/dhr/slide2.svg" type="image/svg+xml"></object>
    </div>

    <div class="project-section">
        <div class="w-container">
            <h2>Current Solutions and Available Data</h2>

            <P>Currently, there aren’t many options for the general public to educate themselves on addictive technology. A small, but growing number of non-profit organizations are focused on these issues and have successfully defined the problem for both experts and non-experts. The Center for Humane Technology’s1 mission is, in part, to develop ethical design standards and educate designers and technologists about healthier approaches. Common Sense Media rates and reviews technology aimed at children so parents and teachers can make informed choices. While there are a number of apps and services that try to help the average adult user with time management, such as Moment2 and Rescue Time3, they generally provide information on user behavior, rather than looking at the digital service. Moment, in collaboration with The Center for Humane Technology, conducted a study on the relationship between happiness and time spent on a given service, however, only a small amount of high-level data has been published from the study.4 On the other end of the moral spectrum, there are a number of guides to creating addictive products. One prominent example of this would be the best-selling book <em>Hooked</em>, by Nir Eyal, which provides step-by-step instructions on how to create addictive digital products.</P>
            <p>Outside of the field of tech addiction specifically, there is a massive body of research relating to other areas of addiction. Gambling addiction, in particular, shares a lot of characteristics with technology addiction, in regards to gamification and variable rewards, and will likely be a fruitful avenue of exploration for us to explore further. The history of drug addiction in the U.S. is incredibly complex and interwoven with politics, in many cases with racist and xenophobic origins. It will take further research for us to identify what if any takeaways from this adjacent area are important to consider in the context of technology addiction. One thing worth noting is that, in general, health and environmental issues have an outsized negative impact on the most vulnerable in society. At a moment when technology addiction mitigation and internet cleanup is growing as an industry, it’s crucial to be aware of these issues. Many of the time management services available have a free basic version, but encourage users to purchase a premium version. If we a create a world full of unhealthy digital litter we must ensure that everyone has access to a cleaner and safer internet and not just those that can afford it.</p>
            <p>We believe that one possible solution is to create a service that educates users about the risks that they are encuring by using an app or website. A more educated user population would put pressure on companies to build products that are healthier and would over time make the internet a better place for everyone.</p>

        </div>
    </div>
    <div class="slide">
        <object data="images/dhr/slide3.svg" type="image/svg+xml"></object>
    </div>
    <div class="project-section">
        <div class="w-container">
            <h2>Project Details</h2>

            <p>The top level assets for the project include a lofi working prototype that utilizes existing APIs such as Terms of Service: Didn’t Read5 and Have I been PWND6 to search for a website and rate it on two of the components, security and terms of service. Because data sets on addictiveness are hard to come by, we also decided to build out our own data set by surveying users, which we will discuss later in the paper.</p>
            <p>We are imagining two main user flows for the final product. The first would be to warn users before they engage with a particular service about the risks associated with that service. This would be similar to the warning you receive when your browser doesn’t recognize a website’s SSL certificate. Unlike many of the products currently in existence, this piece would not require user data. For example, a big criticism of the app Moment is that it requires a lot of sensitive user data to function properly. Users would also be able to search for the score of a given website or service. The 2nd user flow would include the personalized user report, which would track user behaviour. This is inline with many existing time management services.</p>
            <p>Below is a design mockup of the browser extension. It assigns an overall letter grade to the particular website you are on. It assigns an addictiveness grade based on metrics we have researched and created. It pulls in data from the Terms of Service, Didn’t Read API to assign a grade for their terms of service. It assigns a privacy grade based on their ability to keep your information private. It gives you a security grade based on their history of data leaks using the Have I been PWND7 API. It informs you whether the website is GDPR compliant or not and also gives you a grade based on the amount of targeted ads the service shows you. The browser extension also provides basic information about the service such as owner and country of origin, as well as suggests alternatives to that service.</p>


        </div>
    </div>
    <div class="slide">
        <object data="images/dhr/slide5.svg" type="image/svg+xml"></object>
    </div>
    <div class="project-section">
        <div class="w-container">
            <h2>User Research</h2>

            <p>As far as we know, there are no publicly available data sets that have rated a web service for their propensity to addict users. Our first step in creating this data set is to define reliable metrics to examine. We developed the metrics through researching both problematic design practices as well as more ethical design approaches, such as those put forth by Tristan Harris. With the correct metrics it would be possible to crowdsource ratings of services and experiment with using automated processes, such as machine learning, to identify key components that we understand are addictive. The first iteration of the browser extension will purely be to crowdsource this data. Users who have the extension would be asked a series of questions whenever that user goes to a site that hasn’t been rated or has recently been updated. We’ve started building this dataset and testing our metrics by conducting an initial survey. Through our research we identified 5 main categories for rating addiction on a digital service to focus on. These categories are social pressure, off-platform call-to-actions, automation, gamification, and freedom of choice. While there is some overlap between aspects of each category we tried to determine distinct areas to investigate. Each question was rated on a scale of 0 to 5. The final ratings were determined by averaging each section and then averaging the section ratings.</p>
            <p>We have defined Social Pressure to include aspects relating to the fear of missing out (“FOMO”), social reciprocity, value signalling, and gamification of social behaviours. FOMO is determined by what degree the use feels that they are missing out on important information or social events when not using the service. Social reciprocity refers to whether the service encourages a “like for like” culture. We also ask if the service has value signaling, where users feel excessive pressure to identify themselves as belonging to a particular group or agreeing with a particular ideology while using this service. The last element of social pressure we look at is the gamification of social interactions and friendships, by determining if the service awards or rates those interactions. We believe that these practices not only encourage the user to log on more but frequently leave the user feeling worse off than they would have if they never logged on.</p>
            <p>Off-Platform Callbacks, or calls-to-action, include unwanted emails, push notifications, and SMS. The dangers of these are obvious to most users, they are distracting and constantly push the user back to the application, where their engagement is measured and attention sold. Perhaps less obvious are how the service employs targeted ads. Does this service have direct or targeted ads? Does the website or service target you specifically while using their service? When on other sites or apps are you directly targeted by their service? For example, do you get personalized Amazon ads when on the New York Times site?</p>
            <p>In the area of automation, we are investigating whether a service employs techniques such as autoplay, or infinite-looping videos to make it more difficult to stay on task or disengage with a service. Netflix’s 10-second timer is one of the most infamous examples of this technique. When a show or movie starts its credits, a users mouse is automatically placed over the “play next” call to action, further reducing the need for decision making from the user. If the user doesn’t press play, Netflix will begin it automatically after 10 seconds. On a Netflix related production, the timer is reduced to 5 seconds, further evidence that at least Netflix finds this technique effective.</p>
            <p>Gamification looks at the impact of variable rewards, infinite scrolling, and streaking. Variable rewards are considered to be crucial aspect in the creation of addictive behavior. In the survey, we ask if the app varies the type and amount of notifications the user receives and whether the notifications received contain practical and useful information or seemingly random updates. Variable rewards can also take the form of animated notifications or other visceral design elements to increase their impact on the user. Slot machine like-components, such as infinite-scrolling, are a further example of gamification, allowing the user to lose track of how much time they’ve spent with the product. Streaking looks at whether the service awards the user for repeating a particular behaviour for a continuous period of time. One example of this is Snapchat’s counter near the users’ friends’ names to show how many days in a row they have engaged with them.</p>
            <p>Finally, we are considering the user's ability to leave the service. The survey asks whether the company is a monopoly and how hard it is to leave. While these are not necessarily addictive design elements, they are important data points for understanding how much control a user has. One feature we are hoping to be able to include in a final product would be a recommendation for similar products with a better rating and this information may be important for that function.</p>
            <p>The initial phase of this survey only checked the top 10 websites in the US, and the responses were not surprising at all. Facebook rated the highest at 3.6 out of 5, and Wikipedia rated the lowest at 0.7. The higher rating indicates a higher level of addictive elements.</p>

        </div>
    </div>
    <div class="slide">
        <object data="images/dhr/slide4.svg" type="image/svg+xml"></object>
    </div>
    <div class="project-section">
        <div class="w-container">
            <h2>Next Steps</h2>
            <p>Our immediate next step is to build an alpha version of the browser extension to collect data. The basic version would be built using Javascript, HTML and CSS to crowdsource data. We plan to do internal testing and then release a beta version this summer to users.</p>
            <p>We also want to explore how to get build an efficient personalized and customized usage report for our users. We plan to display their usage behaviors and statistics in a report manner. We would be tracking the time the spent on the top 20 websites they visit the most. We would be giving them a count of the number of times they have visited that particular website over that day. We would also be giving the addictiveness score of the website based on our metrics and analysis. We would also be providing them a measure of the average experience that people have had based on the time they spend on a particular product or service. This particular metric would be based on datasets that we plan to accumulate which would then get better as we acquire more users over time. It would also offer weekly and statistics for longer duration of time.</p>
            <p>It is significantly simpler to collect this data for websites the user visit on a browser than it is for smart phone apps. We are in the process of researching how to best gather smart phone data to give the user the most accurate report possible. We plan to study the battery health of a user on their phone and look at ways to incorporate those metrics. At Google I/O 2018, Google announced that Android P will include a dashboard to track the time you spend on your phone with the apps you use. We think that this presents an opportunity for us to use this data and incorporate it in our product.</p>
        </div>
    </div>
    <div class="slide">
        <object data="images/dhr/slide7.svg" type="image/svg+xml"></object>
    </div>
    <div class="project-section">
        <div class="w-container">
            <h2>To Sum it Up</h2>
            <p>Every year, companies like Facebook, Twitter and Google get better at brokering attention, and raising engagement. These design practices are becoming so ubiquitous, that even smaller companies are being forced to used these practices in order to compete with the rest of the digital world. The most vulnerable party involved is the user, and companies are more concerned with keeping their engagement up, than the wellbeing of the people using their services. With scandals like Cambridge Analytica, and the recent Twitter breach, users are becoming more aware of the dangers that this environment, and the design practices it encourages, can present to them. There is clearly an emerging market for tools that give the uses more control over their own attention. Digital Health Report will fill this gap by giving users the information they need to make to make responsible decisions online. We hope to accomplish this without invading the user’s privacy or taking even more of their attention. By educating users about the general health of a web service, they will be empowered to make better decisions online and provide information for holding the companies that run these services accountable.</p>
        </div>
    </div>
<!--    php footer include-->
   <?php include 'php/footer.php'; ?>  
<!--php footer end    -->
</body>

</html>
