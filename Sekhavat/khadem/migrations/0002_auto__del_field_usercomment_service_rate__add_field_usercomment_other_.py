# -*- coding: utf-8 -*-
from south.utils import datetime_utils as datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Deleting field 'UserComment.service_rate'
        db.delete_column(u'khadem_usercomment', 'service_rate')

        # Adding field 'UserComment.other_rate'
        db.add_column(u'khadem_usercomment', 'other_rate',
                      self.gf('django.db.models.fields.IntegerField')(default=2, null=True, blank=True),
                      keep_default=False)

        # Adding field 'UserComment.coming_on_time'
        db.add_column(u'khadem_usercomment', 'coming_on_time',
                      self.gf('django.db.models.fields.IntegerField')(default=2, null=True, blank=True),
                      keep_default=False)

        # Adding field 'UserComment.nahve_barkhord'
        db.add_column(u'khadem_usercomment', 'nahve_barkhord',
                      self.gf('django.db.models.fields.IntegerField')(default=2, null=True, blank=True),
                      keep_default=False)

        # Adding field 'UserComment.lavazem_kafi'
        db.add_column(u'khadem_usercomment', 'lavazem_kafi',
                      self.gf('django.db.models.fields.IntegerField')(default=2, null=True, blank=True),
                      keep_default=False)

        # Adding field 'UserComment.danesh_kafi'
        db.add_column(u'khadem_usercomment', 'danesh_kafi',
                      self.gf('django.db.models.fields.IntegerField')(default=2, null=True, blank=True),
                      keep_default=False)


    def backwards(self, orm):
        # Adding field 'UserComment.service_rate'
        db.add_column(u'khadem_usercomment', 'service_rate',
                      self.gf('django.db.models.fields.IntegerField')(default=2, null=True, blank=True),
                      keep_default=False)

        # Deleting field 'UserComment.other_rate'
        db.delete_column(u'khadem_usercomment', 'other_rate')

        # Deleting field 'UserComment.coming_on_time'
        db.delete_column(u'khadem_usercomment', 'coming_on_time')

        # Deleting field 'UserComment.nahve_barkhord'
        db.delete_column(u'khadem_usercomment', 'nahve_barkhord')

        # Deleting field 'UserComment.lavazem_kafi'
        db.delete_column(u'khadem_usercomment', 'lavazem_kafi')

        # Deleting field 'UserComment.danesh_kafi'
        db.delete_column(u'khadem_usercomment', 'danesh_kafi')


    models = {
        u'khadem.usercomment': {
            'Meta': {'object_name': 'UserComment'},
            'coming_on_time': ('django.db.models.fields.IntegerField', [], {'default': '2', 'null': 'True', 'blank': 'True'}),
            'danesh_kafi': ('django.db.models.fields.IntegerField', [], {'default': '2', 'null': 'True', 'blank': 'True'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'lavazem_kafi': ('django.db.models.fields.IntegerField', [], {'default': '2', 'null': 'True', 'blank': 'True'}),
            'nahve_barkhord': ('django.db.models.fields.IntegerField', [], {'default': '2', 'null': 'True', 'blank': 'True'}),
            'other_rate': ('django.db.models.fields.IntegerField', [], {'default': '2', 'null': 'True', 'blank': 'True'})
        }
    }

    complete_apps = ['khadem']