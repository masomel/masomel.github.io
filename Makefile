publish: scp ./*.html ./style.css melara@tux.cs.princeton.edu:~/public_html/

publish_pubs: scp ./pubs/*.pdf melara@tux.cs.princeton.edu:~/public_html/pubs/

publish_multisurf: scp ./multisurf/* melara@tux.cs.princeton.edu:~/public_html/multisurf/

publish_foto: scp ./marci.jpg melara@tux.cs.princeton.edu:~/public_html/