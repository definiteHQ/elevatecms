var Api = (function ($) {

    function approve(submissionId)
    {
        return $.ajax({
            url: apiUrl + '/registrants/approve',
            data: {
                'id': submissionId
            },
            method: 'post'
        });
    }

    function unApprove(submissionId)
    {
        return $.ajax({
            url: apiUrl + '/registrants/unapprove',
            data: {
                'id': submissionId
            },
            method: 'post'
        });
    }

    function destroy(submissionId)
    {
        return $.ajax({
            url: apiUrl + '/registrants/destroy',
            data: {
                'id': submissionId
            },
            method: 'post'
        });
    }

    function winner(submissionId)
    {
        return $.ajax({
            url: apiUrl + '/registrants/winner',
            data: {
                'id': submissionId
            },
            method: 'post'
        });
    }

    function unWinner(submissionId)
    {
        return $.ajax({
            url: apiUrl + '/registrants/unwinner',
            data: {
                'id': submissionId
            },
            method: 'post'
        });
    }

    return {
        destroy: destroy,
        approve: approve,
        unapprove: unApprove,
        winner: winner,
        unWinner: unWinner
    }

})(jQuery);