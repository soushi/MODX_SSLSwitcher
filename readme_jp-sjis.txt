SSL Switcher

[�@�\]
MODx��https�̃y�[�W���������������₷������v���O�C���ł��B
���݁A�ȉ��̋@�\������܂��B

1.[~s(�h�L�������gID)~]�ɂ��URL�ϊ�
  MODx�̃R���e���c��[~(�h�L�������gID)~]�ƕ\�L����ƃh�L�������gID��URL��\�����Ă���܂��B
  SSL Swicher�ł͐V����[~s(�h�L�������gID)~]�\�L���g�p�ł��܂��B
  ���us�v�����Ă܂��B

  [~s(�h�L�������gID)~]���g�����ꍇ���A�w�肵���h�L�������gID��URL��\�����Ă����̂ł����A
  https�̃y�[�W�Ɏw�肵�Ă���h�L�������g�Ɋւ��Ă�https+�h���C���t�̃t���p�XURL�ŕ\�����܂��B
  �h���C���t��URL�ɕϊ����Ă���郋�[���͏������G�ňȉ��̂Ƃ���ł��B

                                  ��[~s(DocID)~]�������h�L�������g
                                | http�ȃy�[�W  | https�ȃy�[�W
  ----------------------------------------------------------------------------------
  ��DocID�̎w��h�L�������g     |               |
                  http�ȃy�[�W  |�ʏ�ϊ�       |http+�h���C���tURL�\��
                  https�ȃy�[�W |http+�h���C���t|�ʏ�ϊ�


2.http����https�̃y�[�W�̋������_�C���N�g
�h�L�������g���́uSwitchHTTP to HTTPS�v�L���ɂ���ƁA���̃h�L�������g��http�ŃA�N�Z�X���Ă����ꍇ�A
�����I��https�̃y�[�W�Ƀ��_�C���N�g�����܂��B


[����m�F��]
  �EMODx0.9.5 and 0.9.6
  �EPHP5.2.x
  �EMySQL 5.0.33
  �E�����R�[�h UTF-8

[�C���X�g�[�����@]
1.�A�[�J�C�u�t�@�C�����𓀂��܂��B

2.�Ǘ���ʂŃv���O�C����V�K�쐬���܂��B
  ���u���\�[�X�v���u���\�[�X�Ǘ��v���u�v���O�C���v���u�v���O�C���̍쐬�v

    [�S��]
    �v���O�C����    : sslSwitcher
    ����            : (�C��)
    �v���O�C���R�[�h: sslSwitcher.txt�t�@�C���̒��g�����̂܂ܒ������

    [�ݒ�]�����ɐݒ�͂���܂���    

    [�V�X�e���C�x���g]
    ���̃C�x���g���N���b�N���ă`�F�b�N��t���Ă��������B

      �EOnWebPageInit
      �EOnWebPagePrerender

3.�Ǘ���ʂŃe���v���[�g�ϐ����쐬���܂��B
  ���u���\�[�X�v���u���\�[�X�Ǘ��v���u�e���v���[�g�ϐ��v
                                         ���u�e���v���[�g�ϐ��̍쐬�v

    �ϐ���               : sslSwitcher
    ����                 : (�C��)
    ���̓^�C�v           : Check Box
    ���͎��̃I�v�V�����l : UseHTTPS||SwitchHTTP to HTTPS
    �K��l               : �󔒂̂܂�
    Widget               : �I��
    ���בւ���           : (�C��)���킩��Ȃ����0��OK�ł�
    �e���v���[�g�ւ̃A�N�Z�X�F 
                    ���ݎg�p���Ă���e���v���[�g���`�F�b�N���Ă��������B
                    (�悭�킩��Ȃ���ΑS�ĂɃ`�F�b�N�ł�OK�ł�)

[�g����]
1.�Ǘ���ʂ�https���g�������h�L�������g��ҏW���܂��B
  �e���v���[�g�ϐ��̕����ɁuUseHTTPS�v�uSwitchHTTP to HTTPS�v�Ə����ꂽ�`�F
  �b�N�{�b�N�X���\������Ă���̂ŁA�K�v�ɉ����ă`�F�b�N�����ĕۑ����܂��B
  
    �EUseHTTPS
      �Y���h�L�������g�ł�https���g�p����

    �ESwitchHTTP to HTTPS
      http�ŃA�N�Z�X���ꂽ�ꍇ�A�����I��https�y�[�W�ɐ؂�ւ���

2.�h�L�������g����[~(�h�L�������gID)~]�Ə����������ȉ��̂悤�ɏ��������܂��B

    [~s(�h�L�������gID)~]    ���us�v�����Ă܂��B

  ����Œʏ��[~(�h�L�������gID)~]�Ɠ����悤�ȕϊ����s���̂ł����Ahttp����
  https�̃h�L�������g�Ɉڂ�悤�ȏꍇ��https�t��URL�ɂ����܂��B
  (https����http�Ɉڂ�Ƃ���http�t��URL�ɂ����܂�)

3.http����https�y�[�W�̐؂�ւ�
  �uSwitchHTTP to HTTPS�v��L���ɂ��Ă���h�L�������g��http�ŃA�N�Z�X���܂��B
  �����https�̃y�[�W�ɐ؂�ւ��܂��B

[URL�ϊ��̗�]
  [�T�C�g��URL] http://ayd.jp/
  [http�̃h�L�������gID] 10
  [https�̃h�L�������gID] 20

1.�h�L�������gID10�ňȉ��̏������������ꍇ�̕ϊ����URL

    [~s10~] �� /index.php?q=10
    [~s20~] �� https://ayd.jp/index.php?q=20

2.�h�L�������gID20�ňȉ��̏������������ꍇ�̕ϊ����URL

    [~s10~] �� http://ayd.jp/index.php?q=10
    [~s20~] �� /index.php?q=20


[�X�V����]
 2007/12/12 - 1.01
  �Ehttp��https���_�C���N�g�@�\��ǉ�
  �Ereadme���C��
 2007/12/10 - 1.00
  �E�����[�X

