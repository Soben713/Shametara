# -*- coding: utf-8 -*-
from south.utils import datetime_utils as datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'UserComment'
        db.create_table(u'khadem_usercomment', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('service_rate', self.gf('django.db.models.fields.IntegerField')(default=2, null=True, blank=True)),
        ))
        db.send_create_signal(u'khadem', ['UserComment'])


    def backwards(self, orm):
        # Deleting model 'UserComment'
        db.delete_table(u'khadem_usercomment')


    models = {
        u'khadem.usercomment': {
            'Meta': {'object_name': 'UserComment'},
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'service_rate': ('django.db.models.fields.IntegerField', [], {'default': '2', 'null': 'True', 'blank': 'True'})
        }
    }

    complete_apps = ['khadem']