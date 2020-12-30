--- 
layout: post
title: "Faucet Facets: A Few Best Practices for Designing Multifaceted Navigation Systems"
date: 2002-06-04
author: Jeffrey Veen
featured: yes
abstract: "How to design navigation for a world that's decidedly not heirarchical."

---


So often we assume that Web sites should be hierarchically organized. We talk about a “home page” that offers “top-level navigation” so that users can “drill down” to the content. It’s as if we’re programmed to think top down.

But what about information that isn’t as easily structured this way? Sometimes, content has many attributes that have different importance to different users. A hierarchy assumes everyone approaches these attributes the same way, but that’s often not the case.

Let’s look at a real world example. A couple weeks ago, I walked into a huge warehouse of kitchen appliances and was approached by a salesman.

“Can I help you?” he asked.

“I need a dishwasher that is energy and water efficient with a stainless steel tub and accepts cabinet fronts for an integrated look,” I told him smugly.

“We have three,” he replied. “How much do you want to spend?”

Now that’s a good salesman. He had the entire warehouse inventory in his head, and could narrow down my search based on the criteria I specified. He even knew which unspecified attributes (price) might be important to my decision.

If only Web sites were as effective. Based on my personal preferences, a typical navigation system for dishwashers might look like this:

appliances > dishwashers > energy consumption

In this sort of hierarchical interface, users click down through the categories, choosing their preference for each attribute until they find a dishwasher that perfectly matches their desires. But what if the next user doesn’t value energy consumption over exterior style? What if price is more important? And what if they don’t care at all about a certain attribute? Imagine trying to find all the dishwashers with stainless steel tubs under $400. You’d be clicking up and down the hierarchy following different routes for each choice.

In the world of information science, systems that offer lots of attributes for each piece of information are called multi-faceted. In these systems, each piece of information has facets (like “tub type”) and each facet has values (like “stainless steel”). Interfaces that offer multifaceted navigation present all the options for all the facets as choices for the user. Each time a choice is made, the total number of available matches is winnowed down a little. This winnowing process is iterative. As you choose a value for each facet, the system responds by updating the total number of items now in your subset. The ultimate goal in an interface such as this one is to reduce the size of the subset to a number small enough to allow easy browsing.

While this may sound like a simple interface to design, the reality often gets muddled. Current Web browsers aren’t particularly suited for this sort of iterative process. Ideally, the user would want to experiment with the facets they’re defining. But each selection requires a round trip to the server, which can take the fluidity out of an exploratory experience, even on the fastest connections.

So what are the best practices for designing navigation systems for architectures based on faceted classification? The examples below are pretty good. Each one offers users control of their experience while working around the basic limitations of browser technology.


Broadmoor Interface Detail
Broadmoor renders attributes — in this case, dates — in an appropriate widget. (Click the image for more.)

Facet selection. There are two important ideas here: First, offer users a way to choose the values that are important to them; and second, use interface widgets that are appropriate to the data being displayed. For example, in the Flash-based interface for the Broadmoor Hotel online registration system, date selection is offered in a calendar format. This may seem an obvious choice, but how often has a Web interface forced you to choose dates from a dropdown menu?

Kohler Interface Detail
Kohler uses Javascript to make the interaction more seamless. (Click the image for more.)

Winnowing interaction. When a user chooses a value for a facet, show the new total of matches, so that they can see how a particular selection reduces (or, in some cases, increases) the number of items available. For example, consider the Web site for faucet manufacturer Kohler. Their faucet finder interface updates automatically after every choice. If you choose a faucet with a sidespray, it reduces the number of faucets from 124 to 55. Add a cross-style handle and you’ll be down to 7 choices. Click “Show Faucets” and you can easily browse your results.
The effectiveness of this interaction depends largely on technology. The Kohler site uses Javascript to make this update. This unfortunately requires a trip back to the server to update the number of faucets that meet the new selected criteria. The more iteration that can happen on the client side, the faster the interaction will be, and the more apt a user will be to explore the interface. You can see this in action on the Broadmoor site’s Flash interface, which updates the possible options without reloading.


Sears Interface Detail
Sears doesn’t allow enough iteration, which makes browsing cumbersome. (Click the image for more.)

Results Rendering. Show your user something when they ask for results. Some systems display these results simply as a number (like the Kohler app above); others show a list of matches much like a search engine would. There are also hybrids that display a few likely matches as well as the total number of matches in the full set. The right interface decision really depends on the kind of information being displayed. The important thing is to let users continue to refine their choices on the same page where the results are being displayed. Retail giant Sears.com offers a great faceted appliance locator, but once you make your choices and submit the form, all you get are results — you have to go back and start over to try another selection. At least the interface shows you how many choices were in each one of your selections, allowing you to click back to broader criteria.
Architectures based on faceted information are an interesting hybrid of search and navigation. Users are given the impression of browsing through vast amounts of information, while the iterative process of specifying attributes is much like the interaction of many advanced search engines. The best examples find innovative solutions to the inherent overhead of browser technology to achieve an interactive experience that is as seamless as possible.