# -*- coding: utf-8 -*-
# Generated by Django 1.10.6 on 2017-03-14 10:49
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('gift', '0001_initial'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='Options',
            new_name='Option',
        ),
        migrations.RenameModel(
            old_name='Transactions',
            new_name='Transaction',
        ),
        migrations.RenameModel(
            old_name='Users',
            new_name='User',
        ),
    ]