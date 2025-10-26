---
layout: post
title: "Vibing with Metcalfe’s Law"
date: 2025-10-10
author: Jeffrey Veen
featured: yes
abstract: Super powerful, totally disposable, completely personalized tools is our future.
og_image: /jeff/images/metcalfe-visualization.png
---

![A visualization of a network with nodes and edges forming a beautiful geometric pattern](/jeff/images/metcalfe-visualization.png)
Earlier this year, we brought the entrepreneurs from our portfolio companies together at [Founder Camp](https://www.instagram.com/reel/DG55PhdpUOT/), a gathering modeled roughly after [FOO Camp](https://en.wikipedia.org/wiki/Foo_Camp). These events were designed around the premise of the ‘unconference’: that the audience will connect and self-organize into conversations that are most relevant to them. More facilitation, less programming. For startup founders, we’ve found this is intensely valuable. The nature of what they’re struggling with is, by definition, out ahead of where conventional advice can help. The best solution is to connect with others who are at the coalface with them.

I hosted the welcome session, and wanted to illustrate the value of these connections from a first principles perspective. As I thought about how I could do this, I remembered [Metcalfe’s Law](https://en.wikipedia.org/wiki/Metcalfe%27s_law) — a way of calculating the value of network effects named after Bob Metcalfe, the creator of Ethernet in the very early days of the internet. The idea is that as a network gets larger, the value grows proportional to the square of the number of nodes. A telephone network with a single phone isn’t very useful, but as you add devices it becomes essential. Same holds for people on a social network, or in this case, founders in a hotel ballroom[^1]. I wanted to show the math: the 209 people in the room represented over 21,736 connections. I told them, “If you’re struggling with a seemingly intractable problem, odds are high that the answer is in the room.”

![A visualization of Metcalfe's Law using telephones](/jeff/images/metcalfes-law-telephones.png)
## Feeling the algorithm 
Two days earlier, on the flight to the event, I sat looking at the slide I would use to explain this. I was using the image from the Wikipedia page: telephones connected in graph diagram. It was accurate but uninspiring. What I really wanted to drive home is that value grows much faster than our intuition would have us believe. Perhaps an animation would help us *feel* how it expands, rather than grappling intellectually with a formula. I could show the network growing like a time lapse of a plant unfurling from a seed. I started playing with a more abstract version of the visualization and quickly grew frustrated. I could see this ending up with hundreds of elements on the slide, each needing to be tediously positioned and animated by hand. This needed to be generated, not drawn.

I left Keynote for Claude. I gave it the Wikipedia diagram and described how I envisioned the animation working, emphasizing that the output would need to be embeddable in a presentation. It gave me a Node app that output a QuickTime movie. A few minutes later I had a crude start. We iterated a dozen times in about 30 minutes and ended with the animation shown at the top of this page. There was applause when the video played onstage.

![The visualizer app I created](/jeff/images/metcalfe-visualizer-app.png)
## Vibe coding is a design super power
The experience I had preparing for Founder Camp was a step towards working in a very different way.

First, it’s a good marker for how fast things are changing. That was in March. We’re now in October and it already feels like my vibe coding story comes from a different era. Today, as I write this, multiple Codex agents work in tiled windows on my desktop, refactoring one of my projects.  I would say that I am struck by how far we’ve come, but that feeling hits me weekly now.  The model releases of past few months have been an astonishing leap forward in the efficacy of [code generation](https://www.claude.com/product/claude-code), [design prototyping](https://www.figma.com/make/), and [UX of increasing powerful agents](https://openai.com/index/introducing-agentkit/). I made the animation in a Sonnet 3.5 chat window, setting everything up by hand in the terminal and pasting back and forth as we iterated. That feels like an ancient way of working but it was only seven months ago! 

And second, this just such a great example of how the changing nature of our tools can unlock our ambition for what’s possible now. I’ve spent a career working under constraints, always able to imagine far more than my teams could realistically develop, beholden to budgets and, frankly, the fear of telling a developer to abandon the code I asked for. But this experience, and others since, has me thinking about tools in a very different way now. Our abilities are compounding at a rate that feels even faster than what my diagram illustrated, and traditional software isn’t keeping up. 

The tools we can summon are limited only by our imagination.

## The Answer is in the Room
Back in that welcome session at Founder Camp, after showing this animation, I asked everyone to think of their current intractable problem. Then I asked them stand and move through the room, physically traversing the connection points in that diagram, looking for the node that could help. It worked so well they wouldn’t stop, and I had to abandon most of the rest of my talk. Which was fine. There was something bigger than the sum of the people in the room or the quadratic growth of the network. We were creating community and connections and sense that the often fraught entrepreneurial journey is not something you need to travel alone. 

I probably would have abandoned the Metcalfe’s Law point had I not been able to visualize it in a way that made it come alive. It sparked the idea to have the crowd act it out, and that led to this wonderful moment. With the wind of AI at my back, I could dissolve long-held constraints and be more ambitious. And that led me to not just be more productive, but to find entirely new ideas.

[^1]: I am generalizing. Metcalfe’s Law counts potential connections and assumes equal edge value. Networks of people have uneven ties: knowledge, power, trust, distance all weigh on relationships. Normalizing these are why we did this exercise in the first place.

