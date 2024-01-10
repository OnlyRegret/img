<?php
$prefix = 'zibll_options';
//签到任务从这里开始-1
//获取卡密备注
function zib_csf_notes_card_page()
{
    //获取数据库
    global $wpdb;
    $wpdb->card = $wpdb->prefix . 'zibpay_card_password';
    //奖励类型
    $task_points = (string) _pz('checkin_reward_task', 0);

    $notes_posts=$wpdb->get_results("SELECT other FROM $wpdb->card WHERE type='balance_charge' group by other");
    $options_notes = array();
    
    if (is_array($notes_posts)) {
        foreach ($notes_posts as $notes) {
            $options_notes[$notes->other] = $notes->other;
        }
        
    } else {
        return false;
    }
    return $options_notes;
}
//签到任务这里结束-1
CSF::createSection($prefix, array(
        'parent'      => 'user',
        'title'       => '签到奖励',
        'icon'        => 'fa fa-fw fa-calendar-check-o',
        'description' => '',
        'fields'      => array(
//签到任务从这里开始 -2
            array(
                'id'       => 'checkin_reward_task',
                'class'    => 'task',
                'title'    => '任务奖励'. $new_badge['6.5'],
                'subtitle' => '',
                'desc'    => '',
                'default'  => '卡密',
                'options'    => array(
                    '关闭' => '关闭',
                    '卡密' => '卡密',
                ),
                'type'       => 'select',
            ),
            array(
                'dependency' => array('checkin_reward_task', '!=', '关闭'),
                'title'   => '奖励通知',
                'id'      => 'reward_notice_in',
                'class'   => 'compact',
                'default' => false,
                'desc'    => __('开启后获取奖励将会给获奖用户发送一条系统消息'),
                'type'    => 'switcher',
            ),
            array(
                'dependency' => array('checkin_reward_task', '!=', '关闭'),
                'id'       => 'task_off',
                'class'    => 'compact',
                'title'    => '重复领取',
                'subtitle' => '重复领取奖励',
                'default'  => '是',
                'options'    => array(
                    '否' => '否',
                    '是' => '是',
                ),
                'type'       => 'select',
            ),
            array(
                'dependency' => array('checkin_reward_task', '!=', '关闭'),
                'id'      => 'task_s',
                'class'   => 'compact',
                'type'    => 'switcher',
                'default' => 7,
                'title'   => __('累计签到', 'zib_language'),
                'subtitle' => '累计签到的天数',
                'desc'    => __('重复领取开启后，启用N+天数'),
                'type'     => 'number',
                'unit'     => '天',
            ),
            array(
                'dependency' => array('checkin_reward_task', '==', '卡密'),
                'id'      => 'task_b',
                'class'   => 'compact',
                'type'    => 'switcher',
                'default' => '',
                'title'   => __('卡密备注', 'zib_language'),
                'subtitle' => '根据卡密备注发放',
                'desc'    => __('奖励会根据卡密备注查询并发放 | <a href="' . admin_url('admin.php?page=zibpay_charge_card_page') . '">管理卡密</a> '),
                'options'    => zib_csf_notes_card_page(),
                'type'       => 'select',
            ),
        ),
    ));
