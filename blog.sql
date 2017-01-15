-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 01:49 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE IF NOT EXISTS `blog_article` (
  `art_id` int(11) NOT NULL,
  `art_title` varchar(100) DEFAULT '' COMMENT '//文章标题',
  `art_tag` varchar(100) DEFAULT '' COMMENT '//关键词',
  `art_description` varchar(255) DEFAULT '' COMMENT '//描述',
  `art_thumb` varchar(255) DEFAULT '' COMMENT '//缩略图',
  `art_content` text COMMENT '//内容',
  `art_time` int(11) DEFAULT '0' COMMENT '//发布时间',
  `art_editor` varchar(50) DEFAULT '' COMMENT '//作者',
  `art_view` int(11) DEFAULT '0' COMMENT '//查看次数',
  `cate_id` int(11) DEFAULT '0' COMMENT '//分类id'
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='//文章';

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`art_id`, `art_title`, `art_tag`, `art_description`, `art_thumb`, `art_content`, `art_time`, `art_editor`, `art_view`, `cate_id`) VALUES
(11, 'Apple might be working on AR glasses with Carl Zeiss', 'Apple,AR,glasses', 'We heard last year that Apple was exploring the possibility of developing augmented reality hardware, and it seems like the company might be edging closer to that goal in the months since that initial report.', 'uploads/20170110102557869.jpg', '<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">In November 2016, Bloomberg’s sources told the publication that Apple had ordered small quantities of near-eye displays to test augmented reality and mixed reality concepts.</p>\r\n<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　Now, technologist Robert Scoble noted that he heard from an unnamed Carl Zeiss employee at CES that the optics firm was working with Apple on “a light pair” of AR/MR glasses that may be announced “this year.” Scoble pointed out that this might have been the reason for Carl Zeiss running an exhibition booth in the AR section of the expo, even though it wasn’t openly talking up its purported collaboration with Apple.</p>\r\n<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　That’s sooner than the projected timeframe of 2018 that Bloomberg previously reported. As we noted in our story, there’s certainly plenty of reason to belive that Apple would be interested in developing AR eyewear, given CEO Tim Cook’s enthusiasm for the technology, the company’s acquisition of two AR startups over the past two years and the fact that it was recently awarded a patent for smart glasses equipped with digital displays.</p>\r\n<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　If the rumors are true, it’ll be interesting to see what Apple comes up with. Unlike Microsoft’s HoloLens AR headset, which works with desktop applications for gaming and 3D modeling, the Cupertino firm’s glasses are said to be designed to pair wirelessly with iPhones to show images and contextually relevant information in the wearer’s field of vision.</p>\r\n<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　If that’s the direction Apple chooses, it’ll face a major challenge in once again creating and leading the charge in a new product category, as it did with the smartphone and smartwatch. It’d certainly be nice to see the company shake things up in the industry instead of iteratively updating its products like an also-ran as it did through 2016.</p>', 1484082363, 'ABHIMANYU GHOSHAL', 18, 1),
(2, 'Why China is the next proving ground for open source software', 'China,software', 'China is starting to adopt and contribute to open source projects, especially around big data infrastructure, and tech companies should pay attention.', 'uploads/20170110091742986.jpg', '<p>　 &nbsp;Western entrepreneurs still haven''t figured out China. For most, the problem is getting China to pay for software. The harder problem, however, is building software that can handle China''s tremendous scale.</p>\r\n<p>There are scattered examples of success, though. One is Alluxio (formerly Tachyon), which I detailed recently in its efforts to help China''s leading online travel site, Qunar, boost HDFS performance by 15X. Alluxio CEO and founder, Haoyuan Li, recently returned from China, and I caught up with him to better understand the big data infrastructure market there, as China looks to spend $370 million to double its data center capacity in order to serve 710 million internet users.<br/>This could get loud.</p>\r\n<p>　　<span style="color: rgb(192, 0, 0);">Open sourcing China</span></p>\r\n<p>One of the most interesting things about big data is that all of the best data infrastructure is open source. As Cloudera co-founder Mike Olson has made clear, "No dominant platform-level software infrastructure has emerged in the last ten years in closed-source, proprietary form." This is particularly true in the world of data infrastructure.<br/></p>\r\n<p>　　Historically, China would have benefited from such bounty but in the area of big data, China is not merely consuming the West''s best software: It''s open sourcing its own. Baidu, for example, has just announced the open sourcing of its machine learning platform, PaddlePaddle, under an Apache license. According to Li, "This is as significant as when Google open sourced its machine learning platform, Tensorflow."</p>\r\n<p>　　This is critical because, as Li told me, China''s scale puts all software to the ultimate test.</p><p><br/></p>\r\n<p><strong>　　Hitting China scale</strong>\r\n</p>\r\n<p>　　As Li stressed, "Many of our largest production deployments are in China, and that''s on purpose." That "purpose" is to stress-test Alluxio''s software under the most demanding situations.</p>\r\n<p>　　For example, Baidu has started speaking publicly about the open source infrastructure powering their driverless car initiative. Huawei, for its part, actively promotes its FusionInsight product, which heavily depends on a variety of open source technologies (to which it increasingly contributes). Tencent offers a range of open source infrastructure projects, covering everything from data warehousing to mobile network acceleration.。</p>\r\n<p>　　These represent China''s efforts to open up. But as my conversation with Li makes clear, Western companies (and the open source projects they back) need to be promoting their code in China, too—not only for potential commercial gain, but also to encourage China''s best enterprises to stress-test one''s code, even as we encourage China''s best developers to adopt it. That''s a big reason MongoDB has worked closely with a variety of organizations in China, winning plaudits from China''s largest car-hailing service, Kuaidi, among others.</p>\r\n<p>　　Because, if you can meet China''s scale demands, everything else is easy.</p>', 1484078343, 'Matt Asay', 25, 1),
(3, 'Rocky Mountains From Orbit', 'Earth, International Space Station(ISS)', 'Image Credit: ESA/NASA', 'uploads/20170110101155467.jpg', '<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">Expedition 50 Flight Engineer Thomas Pesquet of the European Space Agency photographed the Rocky Mountains from his vantage point in low Earth orbit aboard the International Space Station. He shared the image with his social media followers on Jan. 9, 2017, writing, "the Rocky mountains are a step too high – even for the clouds to cross."</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">Last Updated: Jan. 11, 2017</p>', 1484081522, 'Sarah Loff', 8, 1),
(4, 'Mice with incurable eye disease recover with iPS transplant, study says', 'Mice,eye', 'According to the Japanese Ophthalmological Society, 18.7 in 100,000 people are believed to have the eye disease in the country.', 'uploads/20170110101316515.jpg', '<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">Photoreceptor cell functions of mice with an incurable eye disease recovered after the transplant of such cells produced from induced pluripotent stem cells (iPS cells), according to a study published Wednesday.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">，The research, performed by a team including Michiko Mandai of the Riken Center for Developmental Biology in Kobe, was published in the online edition of U.S. journal Stem Cell Reports.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">After confirming the safety of the process, the group will file an application with hospital ethics committees for clinical research within two years.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">Retinitis pigmentosa is an inherited and intractable eye disease that causes photoreceptor cells, which react to light first in the retina, to degenerate. It narrows the visual field and makes it hard to see at night.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">According to the Japanese Ophthalmological Society, 18.7 in 100,000 people are believed to have the disease in the country.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">In the research, the team produced photoreceptor cells from iPS cells of mice, transplanted them to 30 mice with the disease and checked whether the mice would react to light.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">The group put the mice in one of two adjacent boxes, delivering an electric shock if they failed to run into the other box within five seconds after a light was shone in the first box.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">Some 40 percent of mice that received a transplant in one or both eyes ran into the other box, proving that they reacted to light.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">A closer study of the mice found that reaction to light reached the brain through synapses, which connect neuronal cells.</span></p>\r\n<p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 26px; text-indent: 28px;">The study marked the first time that an establishment of synaptic contacts related to reaction to light was confirmed after a tissue transplant in the late stage of the disease, according to the team.</span></p>', 1484081601, 'JIJI', 9, 1),
(5, 'Microsoft sued by employees who developed PTSD after reviewing disturbing content', 'Microsoft,PTSD', 'Microsoft is being sued by two of its Online Safety Team employees over claims that they developed post-traumatic stress disorder (PTSD) in their roles at the company.', 'uploads/20170110101409922.jpg', '<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">In the lawsuit filed at the end of last year (PDF), Henry Soto and Greg Blauert, who worked at Microsoft’s facility in King County, Washington, claimed that they were tasked with reviewing toxic content – including images and videos of child sexual abuse, people dying, and murder – for years, so they could take it down, and flag it with law enforcement and child protection agencies .</p>\r\n<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">The suit alleges that Microsoft was negligent in its handling of the mental health of the employees on this team – even though the company extended programs and benefits to ensure the welfare of people in its the Digital Crimes Unit, which had similar duties.</p>\r\n<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">The case raises questions not just about the mental health and well-being of people in these taxing roles, but also about the ways in which content platforms deal with such content, in terms of policies that are enforced and technology that is developed and implemented to tackle it.</p>\r\n<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">Moderating media that may not suitable for all audiences is important for social networks and other platforms that host user-submitted content, so they can promise their users a safe and positive environment – and policies that outline what’s okay to share are a good start.</p><p><br/></p>\r\n<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">However, merely sticking a list of rules at the door doesn’t ensure that your users will follow them. That’s why technology that can automatically detect and flag such content is necessary. It’s already here: In recent years, giants like Facebook, Google Twitter and even Microsoft have worked to develop automated cloud-based solutions to spot images of child sexual abuse distributed through their services.</p><p><br/></p>\r\n<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">Unfortunately, it also requires human oversight, and that’s where people like Soto and Blauert come in. And they’re certainly not alone: As this excellent 2014 piece from Wired describes, there are scores of young college graduates in the US who take up content moderation jobs straight out of school, and hundreds of thousands more like them in developing countries where these tasks are outsourced to massive teams.</p><p><br/></p>\r\n<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">Even with access to therapy and counseling, the story notes, the arduous work of closely examining hundreds of pieces of content depicting the most depraved acts you can think of will certainly take a toll on your psyche.</p><p><br/></p>\r\n<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">Hopefully this case will bring to light the dark world in which people like Soto and Blauert have to survive, just to ensure our news feeds aren’t polluted by things most of us don’t have the stomach for. It’s also worth noting that in some countries where this work is outsourced, discussing mental health can be difficult – and the same goes for taking legal action against a global corporation.</p><p><br/></p>\r\n<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; font-size: 15px; color: rgb(51, 51, 51); font-family: tahoma, arial, 微软雅黑, 宋体; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);">Ultimately, it’s up to companies to fully understand what they’re asking of these employees, and to empathize with their situations – so as to improve the conditions in which they provide this valuable service and come up with innovative technology that can minimize our reliance on human involvement for content moderation.</p><p><br/></p>', 1484081668, 'ABHIMANYU GHOSHAL', 8, 1),
(6, 'FIFA to expand World Cup to 48 teams for 2026 tournament', 'soccer,world_cup', 'The World Cup will expand to 48 teams from its current 32, starting with the 2026 edition of soccer''s showpiece tournament, the game''s governing body FIFA has decided.', 'uploads/20170110101541221.jpg', '<p style="margin-top: 0px; margin-bottom: 20px; padding: 0px; line-height: 32px; font-size: 18px; font-family: &#39;Microsoft Yahei&#39;, 微软雅黑, &#39;STHeiti Light&#39;, 华文细黑, SimSun, 宋体, Arial, sans-serif; white-space: normal;">FIFA''s decision making body, the FIFA Council, also decided the format would consist of 16 groups of three teams in the group stage</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; padding: 0px; line-height: 32px; font-size: 18px; font-family: &#39;Microsoft Yahei&#39;, 微软雅黑, &#39;STHeiti Light&#39;, 华文细黑, SimSun, 宋体, Arial, sans-serif; white-space: normal;">　　"The FIFA Council unanimously decided on a 48-team World Cup as of 2026: 16 groups of 3 teams. Details to follow after the meeting," FIFA said on its Twitter feed.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; padding: 0px; line-height: 32px; font-size: 18px; font-family: &#39;Microsoft Yahei&#39;, 微软雅黑, &#39;STHeiti Light&#39;, 华文细黑, SimSun, 宋体, Arial, sans-serif; white-space: normal;">　　FIFA president Gianni Infantino, who replaced the disgraced Sepp Blatter in February, had made World Cup expansion one of his promises during his successful electoral campaign.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; padding: 0px; line-height: 32px; font-size: 18px; font-family: &#39;Microsoft Yahei&#39;, 微软雅黑, &#39;STHeiti Light&#39;, 华文细黑, SimSun, 宋体, Arial, sans-serif; white-space: normal;">　　Infantino had initially suggested a 40-team tournament but then added another eight to that total in October.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; padding: 0px; line-height: 32px; font-size: 18px; font-family: &#39;Microsoft Yahei&#39;, 微软雅黑, &#39;STHeiti Light&#39;, 华文细黑, SimSun, 宋体, Arial, sans-serif; white-space: normal;">　　In making the decision, FIFA brushed aside concerns the expansion would lower the overall standard of the tournament, and make it too long and unwieldy.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; padding: 0px; line-height: 32px; font-size: 18px; font-family: &#39;Microsoft Yahei&#39;, 微软雅黑, &#39;STHeiti Light&#39;, 华文细黑, SimSun, 宋体, Arial, sans-serif; white-space: normal;">　　Critics, including the powerful European clubs as well as some leading coaches, have said FIFA is tampering with a winning formula.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; padding: 0px; line-height: 32px; font-size: 18px; font-family: &#39;Microsoft Yahei&#39;, 微软雅黑, &#39;STHeiti Light&#39;, 华文细黑, SimSun, 宋体, Arial, sans-serif; white-space: normal;">　　The last World Cup in Brazil was widely regarded as one of the best in the competition''s 87-year-old history, featuring shock results, last minute drama and outstanding individual performances.</p>', 1484081749, 'FIFA Media', 15, 2),
(7, 'RLPA determined to see NRL players receive fair cut of extra funding from ARLC', 'Rugby,NRL', 'The funding deal struck by the Australian Rugby League Commission (ARLC) and the NRL clubs may have been enough for chairman John Grant to keep his job, but it has not been enough to entirely satisfy the Rugby League Players Association (RLPA).', 'uploads/20170110101821971.jpg', '<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">The RLPA is heading towards negotiations for a new Collective Bargaining Agreement, and has been watching the difficult exchange between the ARLC and the clubs with interest.</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　While the clubs now have been assured they will receive funding equal to 130 per cent of the salary cap under the new deal, the RLPA wants to make sure the players are seeing their fair share of that money.</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　"You''d expect increases for the players based the additional revenue that''s coming in to the game," RLPA chief executive Ian Prendergast told News Radio''s Tracey Holmes."<br /><br />I''m sure at the end of the day there will be a discussion on what''s fair, and we are going to make sure the player''s contribution and value to the game is recognised."</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　Prendergast says he wants the ARLC and clubs to understand what really drives the game of rugby league — the players.<span id="stock_sh600663"><a href="http://finance.sina.com.cn/realstock/company/sh600663/nc.shtml" class="keyword" target="_blank" style="color: rgb(17, 62, 170); text-decoration: none;"></a></span><span id="quote_sh600663">(<span style="color:black">38.610</span>,&nbsp;<span style="color:black">0.00</span>,&nbsp;<span style="color:black">0.00%</span>)</span>"It''s a unique industry where the product, as well as the labour and the services are irreplaceable. That needs to be recognised in any arrangements going forward.</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　"If you look at the game, I think it''s very popular and very attractive, but I think off field there''s a fair bit of work we need to do to ensure the professional standards off field match the professional performance that the players put in on field."</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　The RLPA and players are often reminded there is only so much money to go around, despite increases in funding, and Prendergast while is fully aware of that situation, he does not believe that should change how the money is distributed.</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　"I think it''s something everybody in sport needs to understand, so that the approach is sustainable, but at times it''s not about affordability, it''s about where we want to prioritise that investment," he said.</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　"In my view, given the players are the game, they need to be a priority./p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　"Clearly the game is quite fractured, so we need everyone pulling in the same direction to help take it forward."</p><p><br/></p>', 1484081905, 'ABC NEWS', 15, 2),
(8, 'AFL clubs'' move to new Perth stadium clouded with uncertainty', 'AFL,Perth', 'Uncertainty continues to cloud the move of WA''s two AFL clubs to the new Perth Stadium, with the State Government still unable to say when a deal will be done for West Coast and Fremantle to play at the Burswood venue.', 'uploads/20170110101938116.jpg', '<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　Sport Minister Mia Davies could not guarantee a stadium-access deal would be finalised before the March state election, despite West Coast warning for months it was nearing the "point of no return" where it could not move in time for the 2018 season.</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　The WA Premier said back in June 2015 he was months away from signing a deal with the clubs, but the issue has dragged out for more than a year-and-a-half.</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　The Eagles have been most vocal in their threats to not move to the $1.6 billion stadium for the 2018 campaign, saying last year a time was approaching where it would become "extremely difficult" to transition from Subiaco Oval to the new venue.</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　The looming pre-election caretaker period, which begins in February, could also slow any deal being finalised and Ms Davies said advice was being sought over whether a contract could be signed in that period.</p>\r\n<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　But she rejected suggestions the timeframe was getting tight to complete a deal, saying the issue should be resolved soon.</p>\r\n<p>"There are issues and they are working through those, it is obviously a significant contract that needs to be signed," she said.<br/><br/>"But I''m told it''s going quite positively and I hope we''ll be able to finalise that in the not-too-distant future. We''re continuing negotiations and that will continue right up to the election and beyond if need be."</p>\r\n<p>Labor leader Mark McGowan said the Government had mishandled the process by not finalising agreements before committing to build the stadium.</p>\r\n<p>"If you build a shopping centre, you sign up your major tenants before they made the decision to build the new stadium," he said.</p>\r\n<p>"It is getting very late in the piece to try to sign up the clubs."</p>', 1484081995, 'Rebecca Trigger', 18, 2),
(9, 'Tyler Wright nominated for Laureus award in action sportsperson category', 'Laureus_award,sport', 'Australia''s surfing world champion Tyler Wright has been nominated in the action sportsperson of the year category of the prestigious Laureus World Sports Awards.', 'uploads/20170110102048702.jpg', '<p>Wright is the only Australian athlete nominated in any of the categories for the 2017 awards, having been acknowledged for her maiden world title in 2016.</p><p><br/></p><p>　　The 22-year-old completed one the most dominant campaigns in history with victory in the season-ending Maui Pro in Hawaii.</p><p><br/></p><p>　　The win was the Australian''s fifth of 2016 — matching the record of former world champion and fellow Australian Stephanie Gilmore, who won the Laureus action sportsperson of the year award in 2010.</p><p>In other categories, Jamaican sprinter Usain Bolt, American basketballers Stephen Curry and LeBron James, British runner Mo Farah, British tennis player Andy Murray and Portuguese football superstar Cristiano Ronaldo have been nominated for sportsman of the year.<br/><br />In the sportswoman of the year category, Germany''s Australian Open tennis champion Angelique Kerber, American gymnast Simone Biles, American runner Allyson Felix, Jamaican sprinter Elaine Thompson, American swimmer Katie Ledecky and British cyclist Laura Kenny are the nominees.</p><p>　　Fiji''s men''s rugby sevens team have been nominated for the breakthrough of the year award, while the Cleveland Cavaliers NBA basketball team, which featured Australian guard Matthew Dellavedova during their championship run, have been nominated for world team of the year.</p><p>The winners will be announced at a ceremony in Monaco on February 14.<br/></p>', 1484082082, 'WSL', 14, 2),
(10, 'Chris Lynn a confirmed starter for first ODI against Pakistan', 'Cricket,Pakistan', 'Big Bash League superstar Chris Lynn has been confirmed to make his one-day international debut in the opening match against Pakistan at the Gabba on Friday.', 'uploads/20170110102224712.jpg', '<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">The big-hitting Brisbane Heat star will make his 50-over debut at his home ground and Australia captain Steve Smith said the team was hoping to see the same ''Lynnsanity'' that has swept the domestic Twenty20 scene transfer to international cricket.<br />"He''s a big strong fella. He hits the ball a long way," Smith said.</p>\r\n<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">　　Lynn, 26, has played for his country in five T20s in 2014 and last year for just 65 runs and a top score of 33 not out.<br />Smith said ODIs presented a slightly different challenge but said Lynn has a licence to play his natural game.</p>\r\n<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">　　"Fifty overs is a long time. You''ve got to be smart the way you play, but he''s got some freedom to go out and play," he said.<strong>There were some questions over Lynn''s fitness, with the injury-prone batsman "stiff and sore" due to a bulging disc in his neck, but he will take his place alongside another debutant from Queensland.</strong></p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);">　　Giant quick Billy Stanlake will play his first international match, with Usman Khawaja and leg-spinner Adam Zampa missing out.<br />All-rounder Glenn Maxwell is also back in the for the first time since last June after missing the past 14 ODIs.</p><p>Maxwell will not, however, be elevated to open after the axing of long-time top-order batsman Aaron Finch.<br/>Smith said Travis Head would be pushed up to partner David Warner after three impressive outings against New Zealand in between the summer''s Test series.</p>', 1484082149, 'Craig Golding', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE IF NOT EXISTS `blog_category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) DEFAULT '' COMMENT '//分类名称',
  `cate_title` varchar(255) DEFAULT '' COMMENT '//分类说明',
  `cate_keywords` varchar(255) DEFAULT '' COMMENT '//关键词',
  `cate_description` varchar(255) DEFAULT '' COMMENT '//描述',
  `cate_view` int(10) DEFAULT '0' COMMENT '//查看次数',
  `cate_order` tinyint(4) DEFAULT '0' COMMENT '//排序',
  `cate_pid` int(11) DEFAULT '0' COMMENT '//父级id'
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='//文章分类';

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`cate_id`, `cate_name`, `cate_title`, `cate_keywords`, `cate_description`, `cate_view`, `cate_order`, `cate_pid`) VALUES
(1, 'News', 'Watch selected news and current affairs items from blog', 'News,Blog', 'Australia''s most trusted source of local, national and world news', 38, 1, 0),
(2, 'Sport', 'Love sport, love lift', 'Sport', 'Love sport, love lift', 3, 2, 0),
(3, 'Entertainment', 'Everyone has their own entertainment', 'Entertainment', '', 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_config`
--

CREATE TABLE IF NOT EXISTS `blog_config` (
  `conf_id` int(11) NOT NULL,
  `conf_title` varchar(50) DEFAULT '' COMMENT '//标题',
  `conf_name` varchar(50) DEFAULT '' COMMENT '//变量名',
  `conf_content` text COMMENT '//变量值',
  `conf_order` int(11) DEFAULT '0' COMMENT '//排序',
  `conf_tips` varchar(255) DEFAULT '' COMMENT '//描述',
  `field_type` varchar(50) DEFAULT '' COMMENT '//字段类型',
  `field_value` varchar(255) DEFAULT '' COMMENT '//类型值'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_config`
--

INSERT INTO `blog_config` (`conf_id`, `conf_title`, `conf_name`, `conf_content`, `conf_order`, `conf_tips`, `field_type`, `field_value`) VALUES
(1, 'Web Title', 'web_title', 'Eric Blog System', 1, '网站大众化标题', 'input', ''),
(2, 'Statistics', 'web_count', '', 3, '网站访问情况统计', 'textarea', ''),
(3, 'Status', 'web_status', '0', 2, 'OPEN STATUS', 'radio', '1|Open,0|Stop'),
(5, 'Subtitle', 'seo_title', 'This is a blog', 4, '对网站名称的补充', 'input', ''),
(6, 'Keywords', 'keywords', 'Blog,PHP,Laravel', 5, '', 'input', ''),
(7, 'Description', 'description', '', 6, '', 'textarea', ''),
(8, 'Copyright', 'copyright', '<p><a href="/">Index Page</a> © 2016 Powered by Eric Han</p>', 7, '', 'textarea', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_links`
--

CREATE TABLE IF NOT EXISTS `blog_links` (
  `link_id` int(10) unsigned NOT NULL,
  `link_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//名称',
  `link_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//标题',
  `link_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//链接',
  `link_order` int(11) NOT NULL DEFAULT '0' COMMENT '//排序'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_links`
--

INSERT INTO `blog_links` (`link_id`, `link_name`, `link_title`, `link_url`, `link_order`) VALUES
(5, 'Google', '', 'https://www.google.com.au', 1),
(6, 'Yahoo', '', 'http://au.yahoo.com', 2),
(7, 'ABC', 'Australian Broadcasting Corporation', 'http://www.abc.net.au/', 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_navs`
--

CREATE TABLE IF NOT EXISTS `blog_navs` (
  `nav_id` int(11) NOT NULL,
  `nav_name` varchar(50) DEFAULT '' COMMENT '//名称',
  `nav_alias` varchar(50) DEFAULT '' COMMENT '//别名',
  `nav_url` varchar(255) DEFAULT '' COMMENT '//url',
  `nav_order` int(11) DEFAULT '0' COMMENT '//排序'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_navs`
--

INSERT INTO `blog_navs` (`nav_id`, `nav_name`, `nav_alias`, `nav_url`, `nav_order`) VALUES
(1, 'Index', 'Portal', 'http://', 1),
(2, 'About', 'About', 'http://', 2),
(3, 'News', 'News', 'http://', 3),
(4, 'Words', 'Doing', 'http://', 4),
(5, 'Shareing', 'Share', 'http://', 5),
(6, 'Understanding', 'Learn', 'http://', 6),
(7, 'Message', 'Gustbook', 'http://', 7);

-- --------------------------------------------------------

--
-- Table structure for table `blog_user`
--

CREATE TABLE IF NOT EXISTS `blog_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='//管理员';

--
-- Dumping data for table `blog_user`
--

INSERT INTO `blog_user` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', 'eyJpdiI6ImZYNEtTYlwveTF3d0NqOVwvSXUxeXpkdz09IiwidmFsdWUiOiJIZGhCeThxdGtCVytNc205K1Qwdk1BPT0iLCJtYWMiOiJlMzI2ZDJjZjgzZmJiNmFhYmYwZGFjMThhZWVhYWM0OWUwZDk1MTIyMTE4YTUwZTIwZTFkYWQ0NmMzNjA0YWVhIn0=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `blog_config`
--
ALTER TABLE `blog_config`
  ADD PRIMARY KEY (`conf_id`);

--
-- Indexes for table `blog_links`
--
ALTER TABLE `blog_links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `blog_navs`
--
ALTER TABLE `blog_navs`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `blog_user`
--
ALTER TABLE `blog_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `blog_config`
--
ALTER TABLE `blog_config`
  MODIFY `conf_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `blog_links`
--
ALTER TABLE `blog_links`
  MODIFY `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blog_navs`
--
ALTER TABLE `blog_navs`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blog_user`
--
ALTER TABLE `blog_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
