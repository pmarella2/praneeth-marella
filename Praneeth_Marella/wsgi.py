"""
WSGI config for Praneeth_Marella project.

It exposes the WSGI callable as a module-level variable named ``application``.

For more information on this file, see
https://docs.djangoproject.com/en/3.0/howto/deployment/wsgi/
"""
from django.core.wsgi import get_wsgi_application
import os
import sqreen

sqreen.start()


os.environ.setdefault("DJANGO_SETTINGS_MODULE", "Praneeth_Marella.settings")

application = get_wsgi_application()
