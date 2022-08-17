# Synergy Auto Website
<img src="./global_assets/images/Colour_Logo_no-bg.png" width=20%>

## Quick description of what I've done

- Separated pages into folders, more standard that way and easier to group related files
- Created stylesheets for general use, but not imlpemented them yet as that's gonna need a lot more work to ensure they play nice
- host.py (desc below)
- Fixed background image (see todo)
- Made favicon circular
- Placed images in dedicated asset folder
- Stole slideshow code from the web
  - Working alright, just need to get the width and height more consistent
  - May replace half of it with php to make it less effort to maintain/allow new images to be added without editing html
- Fixed the links to point to their new locations, and renamed files to they play nicer with css and html
- Made the current page you're on become bold in the navbar (feel free to ask me to undo that, just thought it looked nice)

## Directory Description

- global_assets:
  - Contains all images/stylesheets/scripts used by multiple pages, or placed there to reduce clutter
  - i.e.) global styling, navbar script, gallery
- host.py
  - A quick script to run a local webserver for testing purposes
  - Won't run without python installed
- README.md
  - This file
  - (Only renders nicely on Github)

## TODO:

- Unify styles into stylesheet
- Gallery?
- Adjust background image to not cover header
- Split header and footer content (May fix previous issue) and styling (for consistency)
- Create dedicated classes for title & logo for consistency and easy editing
